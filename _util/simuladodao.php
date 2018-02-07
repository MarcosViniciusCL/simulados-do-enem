<?php
require_once("../_model/Questao.php");
require_once("../_model/Prova.php");
require_once("../_model/Simulado.php");

class SimuladoDAO{

    public function __construct(){
    }

    /**
     * Método responsável de inserir um simulado realizado por um usuário no banco de dados
     * @param simulado
     * @return simulado
     */
    public function inserir($simulado){
        $idusuario = $simulado->getIdUsuario();
        $data_simulado =  $simulado->getDataSimulado();
        $tempo = $simulado->getTempo();
        $pontuacao =  $simulado->getPontuacao();
        $tipo = $simulado->getTipo();

        $SQL = "INSERT INTO simulado(idusuario, data_simulado, tempo, pontuacao, tipo) VALUES ('$idusuario', '$data_simulado', '$tempo', '$pontuacao', '$tipo')";

        $banc = Bd::getInstance();
        $obanco = $banc->abrirconexao();
        pg_query($obanco, $SQL);
        $result = pg_query($obanco, "select lastval();"); //<- Verifica o ultimo index adicionado.
        $banc->fecharconexao();
        $linha = pg_fetch_array($result);
        $simulado->setIdSimulado($linha[0]);
        //$simuladoBD = new Simulado($linha['idsimulado'], $linha['idusuario'], $linha['data_simulado'], $linha['tempo'], $linha['pontuacao'], $linha['tipo']);
        return $simulado;
    }

    /**
     * Método responsável de ler um simulado realizado por um usuário
     * @param id_simulado
     * @return simulado
     */
    public function ler($id_simulado){
        $sql = "select * from simulado where idsimulado = '$id_simulado' limit 1";
        $banc = Bd::getInstance();
        $banc->abrirconexao();

        $resultado = pg_query($sql);
        $linha = pg_fetch_array($resultado);
        $simulado = new Simulado($linha['idsimulado'], $linha['idusuario'], $linha['data_simulado'], $linha['tempo'], $linha['pontuacao'], $linha['tipo']);
        $banc->fecharconexao();

        return $simulado;
    }

    /**
     * Método responsável de ler os simulados realizados pelos usuários
     * @param id_usuario
     * @return simulado
     */
    public function lerIdUsuario($id_usuario){
        $banc = Bd::getInstance();
        $banc->abrirconexao();
        $SQL = "SELECT * FROM simulado WHERE idusuario=$id_usuario";
        $resultado = pg_query($SQL);
        $linha = pg_fetch_array($resultado);
        $simulados = [];
        while ($linha = pg_fetch_array($resultado)) {
            $simulados[] = new Simulado($linha['idsimulado'], $linha['idusuario'], $linha['data_simulado'], $linha['tempo'], $linha['pontuacao'], $linha['tipo']);
        }
        $banc->fecharconexao();
        return $simulados;
    }
    /**
     * Método responsável de atualizar um simulado
     * @param simulado
     * @return simulado
     */
    public function atualizar($simulado){
        $id = $simulado->getIdSimulado();
        $tempoNovo = (string) $simulado->getTempo();
        $pontuacaoNova = (int) $simulado->getPontuacao();

        $banc = Bd::getInstance();
        $banc->abrirconexao();

        $SQL = "UPDATE simulado SET tempo='$tempoNovo', pontuacao='$pontuacaoNova' WHERE idsimulado=$id";
        $resultado = pg_query($SQL);
        $banc->fecharconexao();
        $linha = pg_fetch_array($resultado);
        $simulado = new Simulado($linha['idsimulado'], $linha['idusuario'], $linha['data_simulado'], $linha['tempo'], $linha['pontuacao'], $linha['tipo']);
        return $simulado;
    }
}

?>