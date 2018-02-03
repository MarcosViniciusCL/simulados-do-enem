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
    
    public function getCont(){
        return $this->cont;
    }
    
    public function incrementaCont(){
        $this->cont++;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $this->nome . $nome;
    }

    public function getEnunciado() {
        return $this->enunciado;
    }

    public function setEnunciado($enunciado) {
        $this->enunciado = $this->enunciado . $enunciado;
    }

    public function getRespostaA() {
        return $this->respostaA;
    }

    public function setRespostaA($respostaA) {
        $this->respostaA = $this->respostaA . $respostaA;
    }

    public function getRespostaB() {
        return $this->respostaB;
    }

    public function setRespostaB($respostaB) {
        $this->respostaB = $this->respostaB . $respostaB;
    }

    public function getRespostaC() {
        return $this->respostaC;
    }

    public function setRespostaC($respostaC) {
        $this->respostaC = $this->respostaC . $respostaC;
    }

    public function getRespostaD() {
        return $this->respostaD;
    }

    public function setRespostaD($respostaD) {
        $this->respostaD = $this->respostaD . $respostaD;
    }

    public function getRespostaE() {
        return $this->respostaE;
    }

    public function setRespostaE($respostaE) {
        $this->respostaE = $this->respostaE . $respostaE;
    }

    public function getRespostaCorreta() {
        return $this->respostaCorreta;
    }

    public function setRespostaCorreta($respostaCorreta) {
        $this->respostaCorreta = $respostaCorreta;
    }
    
}
?>