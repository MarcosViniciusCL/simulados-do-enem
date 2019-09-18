<?php

 class Simulado {
    private $idsimulado;
    private $idusuario;
    private $data_simulado;
    private $tempo;
    private $pontuacao;
    private $tipo;

     /**
      * Simulado constructor.
      * @param $idsimulado
      * @param $idusuario
      * @param $data_simulado
      * @param $tempo
      * @param $pontuacao
      * @param $tipo
      */
    public function __construct($idsimulado, $idusuario, $data_simulado, $tempo, $pontuacao, $tipo){
        $this->idsimulado = $idsimulado;
        $this->idusuario = $idusuario;
        $this->data_simulado = $data_simulado;
        $this->tempo = $tempo;
        $this->pontuacao = $pontuacao;
        $this->tipo = $tipo;
    }

     /**
      * @return mixed
      */
    public function getIdSimulado(){
        return $this->idsimulado;
    }

     /**
      * @param $id
      */
    public function setIdSimulado($id){
        $this->idsimulado = $id;
    }

     /**
      * @return mixed
      */
    public function getIdUsuario(){
        return $this->idusuario;
    }

     /**
      * @return mixed
      */
    public function getDataSimulado(){
        return $this->data_simulado;
    }

     /**
      * @return mixed
      */
    public function getTempo(){
        return $this->tempo;
    }

     /**
      * @param $tempo
      */
    public function setTempo($tempo){
        $this->tempo = $tempo;
    }

     /**
      * @return mixed
      */
    public function getPontuacao(){
        return $this->pontuacao;
    }

     /**
      * @param $pontuacao
      */
    public function setPontuacao($pontuacao){
        $this->pontuacao = $pontuacao;
    }

     /**
      * @return mixed
      */
    public function getTipo(){
        return $this->tipo;
    }
}

?>