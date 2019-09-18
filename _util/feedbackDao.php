<?php

if(!isset($_SESSION)){
    session_start();
}
//include_once( "seguranca.php" );
require_once( "bd.php" );

/**
 * Class FeedbackDao
 */
class FeedbackDao {
    /**
     * @var
     */
    private $banc;

    /**
     * FeedbackDao constructor.
     */
    public function __construct() {
        
        
	}
	
	//CREATE

    /**
     * @param $feed
     * @return bool
     */
    function inserir($feed ) {
        
        $iduser = $feed->getIduser();
        $titulo= $feed->getTitulo();
        $descricao= $feed->getDescricao();

        $SQL = "INSERT INTO feedback (idusuario, titulo, descricao) VALUES ('$iduser', '$titulo', '$descricao')";

        //echo 'aqui';
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
     * Método responsável por buscar feedbacks no banco de dados
     * @return bool|resource
     */

    function buscar(){
        $SQL = "SELECT * FROM feedback";
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

?>