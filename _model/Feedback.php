<?php

class Feedback{
	private $idfeed;
	private $iduser;
    private $titulo;
    private $descricao;

    /**
     * Feedback constructor.
     * @param $iduser
     * @param $titulo
     * @param $descricao
     */
	public function __construct($iduser, $titulo, $descricao){
        $this->iduser = $iduser;
        $this->titulo = $titulo;
		$this->descricao = $descricao;
    }
	
	 /**
     * @return mixed
     */
    public function getIdfeed(){
        return $this->idfeed;
    }

    /**
     * @param mixed $nome
     */
    public function setIdfeed($idfeed){
        $this->idfeed = $idfeed;
    }
	
	/**
     * @return mixed
     */
    public function getIduser(){
        return $this->iduser;
    }
	
	/**
     * @return mixed
     */
    public function getTitulo(){
        return $this->titulo;
    }
	
	/**
     * @return mixed
     */
    public function getDescricao(){
        return $this->descricao;
    }
}
?>