<?php
class Log {
	private $idhistorico;
	private $iduser;
	private $data;
	private $idacao;
	private $descricao;

    /**
     * Log constructor.
     * @param $idhistorico
     * @param $iduser
     * @param $descricao
     * @param $data
     * @param $idacao
     */
	public function __construct( $idhistorico, $iduser,$descricao, $data, $idacao ) {
		$this->idhistorico = $idhistorico;
		$this->iduser = $iduser;
		$this->data = $data;
		$this->descricao = $descricao;
		$this->idacao = $idacao;
	}

    /**
     * @return mixed
     */
	public
	function getIdhistorico() {
		return $this->idhistorico;
	}

    /**
     * @return mixed
     */
	public
	function getIdUser() {
		return $this->iduser;
	}

    /**
     * @return mixed
     */
	public
	function getData() {
		return $this->data;
	}

    /**
     * @return mixed
     */
	public
	function getIdAcao() {
		return $this->idacao;
	}

    /**
     * @return mixed
     */
	public
	function getDescricao() {
		return $this->descricao;
	}

}
?>