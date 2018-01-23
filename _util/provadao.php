<?php
//session_start();
//include_once( "seguranca.php" );
require_once( "bd.php" );

class ProvaDao {
	private $banc;
	public function __construct() {


	}

	//CREATE
	function inserir( $qtdquestoes, $ano ) {
		/*$banco = $this -> conectar(); 
		$Resultado = pg_query($this -> conectar(), $SQL); 
        pg_close($this -> conectar()); */


		$SQL = "INSERT INTO prova (qtdquestoes, ano) VALUES ('$qtdquestoes', '$ano')";

		echo 'aqui';
		$banc = Bd::getInstance();
		$obanco = $banc->abrirconexao();

		$result = pg_query( $obanco, $SQL );
		if ( $result != false ) {
			echo " log cadastrado com sucesso!";
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