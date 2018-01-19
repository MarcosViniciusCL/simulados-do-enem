<?php
class Log {
	private $idhistorico;
	private $iduser;
	private $data;
	private $idacao;
	private $descricao;

	public
	function __construct( $idhistorico, $iduser,$descricao, $data, $idacao ) {
		$this->idhistorico = $idhistorico;
		$this->iduser = $iduser;
		$this->data = $data;
		$this->descricao = $descricao;
		$this->idacao = $idacao;
	}

	public
	function getIdhistorico() {
		return $this->idhistorico;
	}

	public
	function getIdUser() {
		return $this->iduser;
	}

	public
	function getData() {
		return $this->data;
	}

	public
	function getIdAcao() {
		return $this->idacao;
	}

	public
	function getDescricao() {
		return $this->descricao;
	}

}
?>