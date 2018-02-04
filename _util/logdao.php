<?php
//session_start();
//include_once( "seguranca.php" );
require_once( "bd.php" );

class LogDao {
	private $banc;
	public function __construct() {


	}

	//CREATE

    /**
     * @param $iduser
     * @param $idacao
     * @param $descricao
     * @return bool
     */
    //Método responsável por inserir um log no banco de dados
	function inserir( $iduser, $idacao, $descricao ) {
		/*$banco = $this -> conectar(); 
		$Resultado = pg_query($this -> conectar(), $SQL); 
        pg_close($this -> conectar()); */


		$SQL = "INSERT INTO logsistema (idusuario, descricao, idacao) VALUES ('$iduser', '$descricao', '$idacao')";

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

	//READ
	//0 - pesquisar por id do usuario
	//1 - pesquisar por id da acao
	//2 - pesquisar por id do log
    /**
     * @param $tipoleitura
     * @param $id
     * @return null|resource
     */
    //Método responsável por fazer a leitura dos logs salvos no banco de dados
	function ler( $tipoleitura, $id ) {
		$banc = Bd::getInstance();
		$banc->abrirconexao();

		$idreferente = "idusuario";
		if ( $tipoleitura == 1 ) {
			$idreferente = "idacao";
		} else if ( $tipoleitura == 2 ) {
			$idreferente = "idhistorico";
		}

		$sql = "SELECT * FROM logsistema WHERE $idreferente = '{$id}';";
		$resultado = pg_query( $sql );
		$login_check = pg_num_rows( $resultado );
		if ( $login_check == 0 ) {
			$banc->fecharconexao();
			return null;
		} else {
			//$resultado = pg_query($sql2);
			$banc->fecharconexao();
			return $resultado;
		}


		$banc->fecharconexao();
		return null;
	}

    /**
     * @return bool|resource
     */
    //Método responsável por buscar os logs do banco de dados
	function buscarLogs(){
	    $SQL = "SELECT * FROM logsistema";
        $banc = Bd::getInstance();
        $abrir = $banc->abrirconexao();
        $result = pg_query($abrir, $SQL);
        if(pg_num_rows($result)==0){
            $banc->fecharconexao();
            return false;
        }else{
            $banc->fecharconexao();
            return $result;
        }

    }

    /**
     * @param $dataini
     * @param $datafim
     * @return bool|resource
     */
    //Método responsável por buscar os logs no banco de dados de acordo com a data inicial e a data final selecionada
    function buscarLogsPeriodo($dataini,$datafim){
        $SQL = "SELECT * FROM logsistema WHERE (datalog BETWEEN '$dataini' AND '$datafim')";
        $banc = Bd::getInstance();
        $abrir = $banc->abrirconexao();
        $result = pg_query($abrir, $SQL);
        if(pg_num_rows($result)==0){
            $banc->fecharconexao();
            return false;
        }else{
            $banc->fecharconexao();
            return $result;
        }
    }

}
?>