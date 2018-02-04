<?php
class QuestaoSQL{
	private $nome;
    private $enunciado;
    private $respostaA;
    private $respostaB;
    private $respostaC;
    private $respostaD;
    private $respostaE;
    private $respostaCorreta;
    private $cont;

    /**
     * QuestaoSQL constructor.
     */
    public function __construct(){
        $this->nome = "";
        $this->enunciado = "";
        $this->respostaA = "";
        $this->respostaB = "";
        $this->respostaC = "";
        $this->respostaD = "";
        $this->respostaE = "";
        $this->respostaCorreta = "";
        $this->cont = 0;
    }

    /**
     * @return int
     */
    public function getCont(){
        return $this->cont;
    }

    /**
     *
     */
    public function incrementaCont(){
        $this->cont++;
    }

    /**
     * @return string
     */
    public function getNome() {
        return $this->nome;
    }

    /**
     * @param $nome
     */
    public function setNome($nome) {
        $this->nome = $this->nome . $nome;
    }

    /**
     * @return string
     */
    public function getEnunciado() {
        return $this->enunciado;
    }

    /**
     * @param $enunciado
     */
    public function setEnunciado($enunciado) {
        $this->enunciado = $this->enunciado . $enunciado;
    }

    /**
     * @return string
     */
    public function getRespostaA() {
        return $this->respostaA;
    }

    /**
     * @param $respostaA
     */
    public function setRespostaA($respostaA) {
        $this->respostaA = $this->respostaA . $respostaA;
    }

    /**
     * @return string
     */
    public function getRespostaB() {
        return $this->respostaB;
    }

    /**
     * @param $respostaB
     */
    public function setRespostaB($respostaB) {
        $this->respostaB = $this->respostaB . $respostaB;
    }

    /**
     * @return string
     */
    public function getRespostaC() {
        return $this->respostaC;
    }

    /**
     * @param $respostaC
     */
    public function setRespostaC($respostaC) {
        $this->respostaC = $this->respostaC . $respostaC;
    }

    /**
     * @return string
     */
    public function getRespostaD() {
        return $this->respostaD;
    }

    /**
     * @param $respostaD
     */
    public function setRespostaD($respostaD) {
        $this->respostaD = $this->respostaD . $respostaD;
    }

    /**
     * @return string
     */
    public function getRespostaE() {
        return $this->respostaE;
    }

    /**
     * @param $respostaE
     */
    public function setRespostaE($respostaE) {
        $this->respostaE = $this->respostaE . $respostaE;
    }

    /**
     * @return string
     */
    public function getRespostaCorreta() {
        return $this->respostaCorreta;
    }

    /**
     * @param $respostaCorreta
     */
    public function setRespostaCorreta($respostaCorreta) {
        $this->respostaCorreta = $respostaCorreta;
    }
    
}
?>