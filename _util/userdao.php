<?php

if(!isset($_SESSION)){
    session_start();
}
//include_once( "seguranca.php" );
require_once( "bd.php" );

class UserDao {

	private $banc;
	public function __construct() {
        
        
	}

	//CREATE
	function inserir( $user ) {
		/*$banco = $this -> conectar(); 
		$Resultado = pg_query($this -> conectar(), $SQL); 
        pg_close($this -> conectar()); */
        
        //echo get_class($user);
        //echo $user->getNome();
        $nome = $user->getNome();
        $email= $user->getEmail();
        $senha= $user->getSenha();
        $privilegio = $user->getPrivilegio();

        $SQL = "INSERT INTO usuarios (nome, email, senha, privilegio) VALUES ('$nome', '$email', '$senha', '$privilegio')";

        //echo 'aqui';
        $banc = Bd::getInstance();
        $obanco = $banc->abrirconexao();
        
        $result = @pg_query( $obanco, $SQL );
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

	//UPDATE
	function atualizar($atributo,$acao,$id) {
        $banc = Bd::getInstance();
        $banc->abrirconexao();
        $SQL = "UPDATE FROM usuarios SET '$atributo' = '$acao' WHERE idusuario = '$id'";
        $resultado = pg_query($SQL);
        if(pg_num_rows($resultado)===0){
            return false;
        }
        $banc->fecharconexao();
		return $resultado;
	}

	//READ
	function ler( $email, $senha ) {
		$banc = Bd::getInstance();
		$banc->abrirconexao();
		
		//$sql = pg_query( $obanco, "SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$senha}' LIMIT 1 ;" );
		
		$sql = "SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$senha}' LIMIT 1 ;";
		$resultado = pg_query($sql);
		$login_check = pg_num_rows( $resultado );
		if($login_check == 0 ){
			$banc->fecharconexao();
			return null;
		}else{
			//$resultado = pg_query($sql2);
			$banc->fecharconexao();
			return $resultado;
		}
		$banc->fecharconexao();
		return null;
	}

	//DELETE
	function apagar( $SQL ) {
		$banco = $this->conectar();
		$Resultado = pg_query( $this->conectar(), $SQL );
		pg_close( $this->conectar() );
		return $Resultado;
	}
	//SELECT
    function buscar($nome, $id){
	    $banco = Bd::getInstance();
	    $banco->abrirconexao();
	    $sql = null;
	    if($id == 0 && $nome != null){
	        $sql = "SELECT idusuario,nome,email,privilegio FROM usuarios WHERE nome LIKE '%"."$nome"."%'";
        }else if($id != 0 && $nome == null){
            $sql = "SELECT idusuario,nome,email,privilegio FROM usuarios WHERE idusuario ='$id'";
        }
	    $result = pg_query($sql);
	    if(pg_num_rows($result)===0){
            $banco->fecharconexao();
	        return false;
        }else{
            $banco->fecharconexao();
	        return $result;
        }

	}
	function buscarPontuacao($id, $data){
		$banco = Bd::getInstance();
	    $banco->abrirconexao();
		$sql = null;
		$sql = "SELECT pontuacao FROM simulado WHERE idusuario = '$id' AND data_simulado = '$data'";
		$result = pg_query($sql);
		if(pg_num_rows($result)===0){
            $banco->fecharconexao();
	        return false;
        }else{
            $banco->fecharconexao();
	        return $result;
        }

	}
}
