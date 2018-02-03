<?php
require_once( "../_model/Questao.php" );
	/**
	* 
	*/
	class QuestaoDAO {
		
		public function __construct(){
			# code...
		}

        /**
         * @param $questao
         * @return bool
         */
        //Método responsável por inserir uma questão no banco de dados
		public function inserir($questao){
			echo get_class($questao);
			$idusuario = $this->idusuario;
			$idprova = $this->idprova;
			$idareaconhecimento = $this->idareaconhecimento;
			$enunciado = $this->enunciado;
			$questaooficial = $this->questaooficial;
			$respostaa = $this->respostaa;
			$respostab = $this->respostab;
			$respostac = $this->respostac;
			$respostad = $this->respostad;
			$respostae = $this->respostae;
			$respostacorreta = $this->respostacorreta;
			
			$SQL = "INSERT INTO questao (idusuario,idprova,idareaconhecimento,enunciado,questaooficial,respostaa,respostab,respostac,respostad,respostae,respostacorreta) VALUES ('$idusuario', '$idprova', '$idareaconhecimento', '$enunciado', '$questaooficial', '$respostaa', '$respostab', '$respostac', '$respostad', '$respostae', '$respostacorreta')";
			
			$banc = Bd::getInstance();
			$obanco = $banc->abrirconexao();

			$result = pg_query( $obanco, $SQL );
			if ($result != false  ) {
				echo "<script type='javascript'>alert('Cadastrado com sucesso!');";
				$banc->fecharconexao();
				return true;
			} else {
				$banc->fecharconexao();
				return false;
				echo "<script type='javascript'>alert('Cadastrado com Erro!');";
			}
		}
        /**
         * @param $tipo_prova
         * @param $ano_or_area
         * @param $quant_quest
         * @return array
         */
		//Método responsável por ler questões do banco de dados
        //OBS.: tipo_prova: 1 - Edição anteriores, 2 - Áreas especificas, 3 - Questões oficiais, 4 - Questões não oficiais, 5 - Questões mistas
		public function ler($tipo_prova, $ano_or_area, $quant_quest){
			if($tipo_prova == 1) { //Edições anteriores
                $sql = "select * from (questao join prova on questao.idprova = prova.idprova) where prova.ano = $ano_or_area limit $quant_quest";
            } else if($tipo_prova == 2){ //Area do conhecimento
                $sql = "select * from questao where idareaconhecimento = $ano_or_area limit $quant_quest";
			} else if($tipo_prova == 3){ //Questões oficiais
				$sql = "select * from questao where questaooficial='S' limit $quant_quest";
			} else if($tipo_prova == 4){ //Questões não oficiais
                $sql = "select * from questao where questaooficial='N' limit $quant_quest";
			} else if($tipo_prova == 5){ //Questões mistas
                $sql = "select * from questao limit $quant_quest";
            }

            $banc = Bd::getInstance();
            $banc->abrirconexao();

            $questoes = [];
            $resultado = pg_query($sql);
            while ($linha = pg_fetch_array($resultado)) {
                $questoes[] = new Questao($linha["idquestao"], $linha["idusuario"], $linha["idprova"], $linha["idareaconhecimento"], $linha["enunciado"], $linha["questaooficial"], $linha["respostaa"], $linha["respostab"], $linha["respostac"], $linha["respostad"], $linha["respostae"], $linha["respostacorreta"]);
            }

            $banc->fecharconexao();
            return $questoes;
        }

        /**
         * @param $vetor_id_questoes
         * @return array
         */
        //Método responsável por ler questões através de um vetor com índices
        public function lerPorVetorIndex($vetor_id_questoes){
            $banc = Bd::getInstance();
            $banc->abrirconexao();

            $questoes = [];
			foreach ($vetor_id_questoes as $id){
                $resultado = pg_query("select * from questao where idquestao = $id");
                $linha = pg_fetch_array($resultado);
                $questoes[] = new Questao($linha["idquestao"], $linha["idusuario"], $linha["idprova"], $linha["idareaconhecimento"], $linha["enunciado"], $linha["questaooficial"], $linha["respostaa"], $linha["respostab"], $linha["respostac"], $linha["respostad"], $linha["respostae"], $linha["respostacorreta"]);
			}
            $banc->fecharconexao();
            return $questoes;
		}

        /**
         * @param $index
         * @return Questao
         */
        //Método que lê uma questão dado um índice
		public function lerPorIndex($index){
            $banc = Bd::getInstance();
            $banc->abrirconexao();
            $resultado = pg_query("select * from questao where idquestao = $index");
            $linha = pg_fetch_array($resultado);
            $questao = new Questao($linha["idquestao"], $linha["idusuario"], $linha["idprova"], $linha["idareaconhecimento"], $linha["enunciado"], $linha["questaooficial"], $linha["respostaa"], $linha["respostab"], $linha["respostac"], $linha["respostad"], $linha["respostae"], $linha["respostacorreta"]);
            $banc->fecharconexao();
            return $questao;
        }

	}
	?>
