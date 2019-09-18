<?php
/**
 * Created by PhpStorm.
 * User: allan
 * Date: 17/01/2018
 * Time: 10:36
 */
if(!isset($_SESSION)){
    session_start();
}
//include_once( "seguranca.php" );
require_once( "bd.php" );

/**
 * Class denunciadao
 */
class denunciadao
{

    /**
     * @var
     */
    private $banc;

    /**
     * denunciadao constructor.
     */
    public function __construct() {


    }
    //CREATE

    /**
     * Metodo responsável por inserir uma denuncia no banco de dados
     * @param $denuncia
     * @return bool
     */
    function inserir( $denuncia ) {

        $idusuario = $denuncia->getIdUsuario();
        $idquestao = $denuncia->getIdQuestao();
        $data = $denuncia->getData();
        $observacao = $denuncia->getObservacao();

        $SQL = "INSERT INTO denunciaquestao (idusuario, idquestao, datadenuncia,observacao) VALUES ('$idusuario', '$idquestao','$data','$observacao')";

        $banc = Bd::getInstance();
        $obanco = $banc->abrirconexao();

        $result = pg_query( $obanco, $SQL);
        if ($result != false  ) {
            echo "Cadastrado com sucesso!";
            $banc->fecharconexao();
            return true;
        } else {
            $banc->fecharconexao();
            return false;
            echo "<script type='javascript'>alert('Cadastrado com Erro!');";
        }

    }

    /**
     * Metodo responsavel por buscar denuncias no banco de dados
     * @return bool|resource
     */

    function buscar(){
        $SQL = "SELECT * FROM denunciaquestao";
        $banco = Bd::getInstance();
        $abrir = $banco->abrirconexao();
        $resultado = pg_query($abrir,$SQL);
        if(pg_num_rows($resultado)==0){
            $banco->fecharconexao();
            return false;
        }else{
            $banco->fecharconexao();
            return $resultado;
        }
    }
}