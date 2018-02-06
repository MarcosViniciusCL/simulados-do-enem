<?php
require_once("../_model/Questao.php");
require_once("../_model/Prova.php");
require_once("../_model/Simulado.php");

/**
 * Class RespostaSimuladoDAO
 */
class RespostaSimuladoDAO {

    /**
     * RespostaSimuladoDAO constructor.
     */
    public function __construct(){
    }

    /**
     * @param $id_simulado
     * @param $vector_resp
     */
    public function inserir($id_simulado, $vector_resp){
         $banc = Bd::getInstance();
         $obanco = $banc->abrirconexao();

         foreach ($vector_resp as $v){
             if(!empty($v[0]) && !empty($v[1])) {
                 $vv = explode(':', $v);
                     $id_q = $vv[0][0];
                     $respp = $vv[1][0];
                     $SQL = "INSERT INTO respostasimulado(idsimulado, idquestao, resposta) VALUES ('$id_simulado', '$id_q', '$respp')";
                     pg_query($obanco, $SQL);
             }
         }

         $banc->fecharconexao();
    }

    /**
     * @param $id_simulado
     * @param $vector_obj
     */
    public function inserirVectorObjeto($id_simulado, $vector_obj){
        $banc = Bd::getInstance();
        $obanco = $banc->abrirconexao();

        foreach ($vector_obj as $v){
            $id_q = $v->getIdQuestao();
            $respp = $v->getRespostaMarcadaUsuario();
            $SQL = "INSERT INTO respostasimulado(idsimulado, idquestao, resposta) VALUES ('$id_simulado', '$id_q', '$respp')";
            pg_query($obanco, $SQL);
        }

        $banc->fecharconexao();
    }

    /**
     * @param $key
     * @param $value
     * @param $idsimulado
     */
    public function atualizar($key, $value, $idsimulado){
        $banc = Bd::getInstance();
        $obanco = $banc->abrirconexao();
        pg_query($obanco, "UPDATE respostasimulado SET resposta='$value' WHERE idquestao=$key AND idsimulado=$idsimulado");
        $banc->fecharconexao();
    }

    /**
     * @param $id_simulado
     * @param $vector_resp
     */
    public function atualizarVetor($id_simulado, $vector_resp){
        $banc = Bd::getInstance();
        $obanco = $banc->abrirconexao();

        foreach ($vector_resp as $v){
            if(!empty($v[0]) && !empty($v[1])) {
                $vv = explode(':', $v);
                $id_q = $vv[0][0];
                $respp = $vv[1][0];
                $SQL = "UPDATE respostasimulado SET resposta='$respp' WHERE idquestao=$id_q AND idsimulado=$id_simulado";
                pg_query($obanco, $SQL);
            }
        }
        $banc->fecharconexao();
    }

    /**
     * @param $id_simulado
     * @return array
     */
    public function obterIdQuestoesSimulado($id_simulado){
        $banc = Bd::getInstance();
        $obanco = $banc->abrirconexao();

        $ids = [];
        $SQL = "SELECT * FROM respostasimulado WHERE idsimulado=$id_simulado";
        $resultado = pg_query($obanco, $SQL);
        while ($linha = pg_fetch_array($resultado)) {
            $ids[] = $linha['idquestao'];
            //$questoes[] = new Questao($linha["idquestao"], $linha["idusuario"], $linha["idprova"], $linha["idareaconhecimento"], $linha["enunciado"], $linha["questaooficial"], $linha["respostaa"], $linha["respostab"], $linha["respostac"], $linha["respostad"], $linha["respostae"], $linha["respostacorreta"]);
        }
        $banc->fecharconexao();
        return $ids;
    }

    /**
     * @param $idSimulado
     */
    public function obterRepostaQuestoes($idSimulado){
        $banc = Bd::getInstance();
        $obanco = $banc->abrirconexao();

        $SQL = "SELECT * FROM respostasimulado WHERE idsimulado=$idSimulado";
        $resultado = pg_query($obanco, $SQL);
        $retorno = "";

        while ($linha = pg_fetch_array($resultado)) {
            $retorno .= $linha['idquestao'].":".$linha['resposta'].",";
        }

        $banc->fecharconexao();

        echo $retorno;
    }
}
?>