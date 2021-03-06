<?php
require_once( "../_model/Questao.php" );
	/**
	* 
	*/
	class QuestaoDAO {

        /**
         * QuestaoDAO constructor.
         */
        public function __construct(){
			# code...
		}

        /**
		 * Metodo responsavel por inserir uma questao no banco de dados
         * @param $questao
         * @return bool
         */
		public function inserir($questao){
			$idusuario = $questao->getIDUsuario();
			$idprova = $questao->getIDProva();
			$idareaconhecimento = $questao->getIDAreaConhecimento();
			$enunciado = $questao->getEnunciado();
			$questaooficial = $questao->getQuestaooficial();
			$respostaa = $questao->getRespostaA();
			$respostab = $questao->getRespostaB();
			$respostac = $questao->getRespostaC();
			$respostad = $questao->getRespostaD();
			$respostae = $questao->getRespostaE();
			$respostacorreta = $questao->getRespostaCorreta();
			
			$SQL = "INSERT INTO questao (idusuario,idprova,idareaconhecimento,enunciado,questaooficial,respostaa,respostab,respostac,respostad,respostae,respostacorreta) VALUES ('$idusuario', '$idprova', '$idareaconhecimento', '$enunciado', '$questaooficial', '$respostaa', '$respostab', '$respostac', '$respostad', '$respostae', '$respostacorreta')";

			$banc = Bd::getInstance();
			$obanco = $banc->abrirconexao();

			$result = pg_query( $obanco, $SQL );
			$banc->fecharconexao();
		}
        /**
		 * Metodo responsavel por ler questoes do banco de dados
		 * OBS.: tipo_prova: 1 - Edicao anteriores, 2 - Areas especificas, 3 - Questoes oficiais, 4 - Questoes nao oficiais, 5 - Questoes mistas
         * @param $tipo_prova
         * @param $ano_or_area
         * @param $quant_quest
         * @return array
         */
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
		 * Metodo responsavel por ler questoes atraves de um vetor com indices
         * @param $vetor_id_questoes
         * @return array
         */

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
		 * Metodo que le uma questao dado um indice
         * @param $index
         * @return Questao
         */
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
