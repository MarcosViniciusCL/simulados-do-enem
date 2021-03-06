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

	/**
     * Metodo responsavel por inserir um usuario no banco de dados
     * @param user
     */
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

	/**
     * Metodo responsavel por atualizar o atributo de um usuario
     * @param atributo
     * @param acao
     * @param id
     * @return resultado
     */
	function atualizar($atributo,$acao,$id) {
        $banc = Bd::getInstance();
        $banc->abrirconexao();
        $SQL = "UPDATE usuarios SET $atributo = '$acao' WHERE idusuario = '$id'";
        $resultado = pg_query($SQL);
        if(pg_num_rows($resultado)===0){
            return false;
        }
        $banc->fecharconexao();
		return $resultado;
	}

	/**
     * Metodo responsavel de ler e retornar dados do usuario a partir do e-mail e da senha
     * @param email
     * @param senha
     * @return resultado
     */
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

	/**
     * @param SQL
     * @return Resultado
     */
	function apagar( $SQL ) {
		$banco = $this->conectar();
		$Resultado = pg_query( $this->conectar(), $SQL );
		pg_close( $this->conectar() );
		return $Resultado;
	}
	
	/**
     * Metodo responsavel de buscar usuarios a partir do nome e do id
     * @param nome
     * @param id
     * @return result
     */
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

	/**
     * Metodo responsavel de buscar a pontuacao do usuario
     * @param id
     * @param data
     * @return result
     */
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
