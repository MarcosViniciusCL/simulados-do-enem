<?php
/**
 * User: Alyson
 * Date: 07/12/2017
 * Time: 14:57
 */

class Usuario{
	private $id;
    private $nome;
    private $sobrenome;
    private $foto;
	private $email;
    private $dataplano;
	private $privilegio;
    private $senha;

    /**
     * Usuario constructor.
     * @param $nome
     * @param $sobrenome
     * @param $sexo
     * @param $dataNascimento
     * @param $cpf
     */
    public function __construct($nome, $sobrenome, $foto, $email, $dataplano, $privilegio, $senha){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
		$this->foto = $foto;
		$this->email = $email;
		$this->dataplano = $dataplano;
		$this->privilegio = $privilegio;
		$this->senha = $senha;
    }

	
	
	
    /**
     * @return Nome
     */
    public function getNome(){
        return $this->nome;
    }

    /**
     * @param $nome
     */
    public function setNome($nome){
        $this->nome = $nome;
    }

    /**
     * @return Sobrenome
     */
    public function getSobrenome(){
        return $this->Sobrenome;
    }

    /**
     * @param $Sobrenome
     */
    public function setSobrenome($Sobrenome){
        $this->Sobrenome = $Sobrenome;
    }

    /**
     * @return mixed
     */
    public function getId(){
        return $this->id;
    }
	
	/**
     * @param mixed $id
     */
	public function setId($id){
		$this->id = $id;
	}
	/**
     * @return foto
     */
    public function getFoto(){
		return $this->foto;
	}
	
	/**
     * @param mixed $foto
     */
	public function setFoto($foto){
		$this->foto = $foto;
	}
	
	/**
     * @return retorna o email de um usuário
     */
	public function getEmail(){
		return $this->email;
	}
	
	/**
     * @param $email
     */
	public function setEmail($email){
		$this->email = $email;
	}
	
	public function getDataplano(){
		return $this->dataplano;
	}
	
	/**
     * @param $dataplano
     */
	public function setDataplano($dataplano){
		$this->dataplano = $dataplano;
	}
	
	/**
     * @return privilegio
     */
	public function getPrivilegio(){
		return $this->privilegio;
	}
	
	public function setPrivilegio($privilegio){
		$this->privilegio = $privilegio;
	}
	
     /**
     * @return mixed senha
     */
	public function getSenha(){
		return $this->senha;
	}
	
	/**
     * @param mixed $senha
     */
	public function setSenha($senha){
		$this->senha = $senha;
	}


}
?>