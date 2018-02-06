<?php
//session_start();
//include_once( "seguranca.php" );
require_once( "bd.php" );

class ProvaDao {
	private $banc;
	public function __construct() {


	}

	//CREATE

    /**
     * @param $qtdquestoes
     * @param $ano
     * @return bool
     */
    //Método responsável por inserir uma prova no banco de dados
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

	function buscarProva($ano){
        $SQL = "SELECT * FROM prova where ano='$ano'";

        echo 'aqui';
        $banc = Bd::getInstance();
        $obanco = $banc->abrirconexao();

        $resultado = pg_query($SQL);
        $linha = pg_fetch_array($resultado);
        $prova = new Prova($linha['idprova'], $linha['ano'], "", $linha['qtdquestoes'], "");

        $banc->fecharconexao();
        return $prova;
    }

	

}
?>