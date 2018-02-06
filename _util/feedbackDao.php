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

}

?>