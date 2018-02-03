<?php
	/**
	* 
	*/
	class Questao implements JsonSerializable{
		private $idusuario;
		private  $idprova;
		private $idareaconhecimento;
		private $idquestao;
		private $enunciado;
		private $questaooficial;
		private $respostaa;
		private $respostab;
		private $respostac;
		private $respostad;
		private $respostae;
		private $respostacorreta;
		private $respostaMarcadaUsuario;

        /**
         * Questao constructor.
         * @param $idquestao
         * @param $idusuario
         * @param $idprova
         * @param $idareaconhecimento
         * @param $enunciado
         * @param $questaooficial
         * @param $respostaa
         * @param $respostab
         * @param $respostac
         * @param $respostad
         * @param $respostae
         * @param $respostacorreta
         */
		function __construct($idquestao,$idusuario, $idprova, $idareaconhecimento, $enunciado, $questaooficial, $respostaa, $respostab, $respostac, $respostad, $respostae, $respostacorreta) {
			$this->idquestao = $idquestao;
			$this->idusuario = $idusuario;
			$this->idprova = $idprova;
			$this->idareaconhecimento = $idareaconhecimento;
			$this->enunciado = $enunciado;
			$this->questaooficial = $questaooficial;
			$this->respostaa = $respostaa;
			$this->respostab = $respostab;
			$this->respostac = $respostac;
			$this->respostad = $respostad;
			$this->respostae = $respostae;
			$this->respostacorreta = $respostacorreta;
		}

        /**
         * @return mixed
         */
		function getIdQuestao(){
			return $this->idquestao;
		}

        /**
         * @return mixed
         */
		function getIDUsuario() {
			return $this->idusuario;
		}

        /**
         * @return mixed
         */
		function getIDProva() {
			return $this->idprova;
		}

        /**
         * @return mixed
         */
		function getIDAreaConhecimento(){
			return $this->idareaconhecimento;
		}

        /**
         * @return mixed
         */
		function getEnunciado(){
			return $this->enunciado;
		}

        /**
         * @return mixed
         */
		function getRespostaA(){
			return $this->respostaa;
		}

        /**
         * @return mixed
         */
		function getRespostaB(){
			return $this->respostab;
		}

        /**
         * @return mixed
         */
		function getRespostaC(){
			return $this->respostac;
		}

        /**
         * @return mixed
         */
		function getRespostaD(){
			return $this->respostad;
		}

        /**
         * @return mixed
         */
		function getRespostaE(){
			return $this->respostae;
		}

        /**
         * @return mixed
         */
		function getRespostaCorreta(){
			return $this->respostacorreta;
		}

        /**
         * @return mixed
         */
        public function getRespostaMarcadaUsuario(){
            return $this->respostaMarcadaUsuario;
        }

        /**
         * @param $respostaMarcadaUsuario
         */
        public function setRespostaMarcadaUsuario($respostaMarcadaUsuario){
            $this->respostaMarcadaUsuario = $respostaMarcadaUsuario;
        }

        /**
         * @return array|mixed
         */
		public function jsonSerialize() {
        return [
        	'idQuestao' => $this->getIdQuestao(),
            'enunciado' => $this->getEnunciado(),
            'respostaA' => $this->getRespostaA(),
            'respostaB' => $this->getRespostaB(),
            'respostaC' => $this->getRespostaC(),
            'respostaD' => $this->getRespostaD(),
            'respostaE' => $this->getRespostaE(),
        ];
    }
	}
?>
