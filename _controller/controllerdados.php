<?php


require_once( "../_util/userdao.php" );
require_once( "../_util/feedbackDao.php" );
require_once( "../_util/logdao.php" );
require_once( "../_model/Usuario.php" );
require_once( "../_model/Feedback.php" );
require_once( "../_model/Questao.php" );
require_once( "../_model/Prova.php" );
require_once( "../_model/Simulado.php" );
require_once( "../_model/DataHora.php" );
require_once( "../_util/questaodao.php" );
require_once( "../_util/simuladodao.php" );
require_once( "../_util/respostasimuladodao.php" );
require_once ("../_util/avaliacaodao.php");
require_once ("../_util/denunciadao.php");
require_once ("../_model/Denuncia.php");
require_once ("../_model/Log.php");

/**
 * Class Controllerdados
 */
class Controllerdados {
    /**
     * @var null
     */
    public static $instance = null;
    /**
     * @var
     */
    private $user;

    /**
     * Controllerdados constructor.
     */
    private	function __construct() {

	}

    /**
     * @return Controllerdados|null
     */
    public static
	function getInstance() {
		if ( self::$instance == NULL ) {
			self::$instance = new Controllerdados();
		}
		return self::$instance;
	}

    /**
     *
     */
    public static function zeraSingleton() {
		self::$instance = new Controllerdados();
	}

    /**
     * @param $nome
     * @param $email
     * @param $senha
     * @param $confirmSenha
     */
    public function cadastraUsuario($nome, $email, $senha, $confirmSenha ) {

		if ( $senha != $confirmSenha ) {
			echo "Saia daqui";
		} else {

			//echo crypt($senha, '$6$rounds=5000$ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789$');

			$senhaCrip = crypt( $senha, '$6$rounds=5000$ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789$' );

			$user = new Usuario( $nome, '', '', $email, '', 'N', $senhaCrip );

            $dao = new UserDao();
			$verifica = $dao->inserir( $user );
			if ( $verifica == true ) {
                echo ("<script>alert('Cadastrado realizado com sucesso!!');</script>");
                $this->realizalogin( $email, $senha, 1 );
			} else {
                echo ("<script>alert('Email já cadastrado'); location.href='../index.html';</script>");
			}

		}
	}

    /**
     * @param $iduser
     * @param $descricao
     * @param $titulo
     */
    public function cadastraFeedback($iduser, $descricao, $titulo){
		if ( $descricao == null || $titulo == null || $descricao == "" ) {
			echo "Saia daqui do cadastra feedback";
		} else {
			$feed = new Feedback( $iduser, $titulo, $descricao );

			$dao = new FeedbackDao();
			$verifica = $dao->inserir( $feed );
			if ( $verifica == true ) {
				echo "deu certo";
			} else {
				echo "deu errado na inserção";
			}

		}
	}

    /**
     * Método usado para cadastrar uma questão não oficial
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
    public function cadastrarQuestaoNaoOficial($idusuario, $idprova, $idareaconhecimento, $enunciado, $questaooficial, $respostaa, $respostab, $respostac, $respostad, $respostae, $respostacorreta ){
        if($idusuario==null || $idprova==null || $idareaconhecimento==null || $enunciado==null || $questaooficial==null ||
            $respostaa==null || $respostab==null || $respostac==null || $respostad==null || $respostae==null || $respostacorreta==null){

            echo "Cai fora";
        }else{
            $questao = new Questao($idusuario,$idprova, $idareaconhecimento, $enunciado, $questaooficial, $respostaa, $respostab,
                $respostac, $respostad, $respostae, $respostacorreta);

            $dao = new QuestaoDAO();
            $verifica = $dao->inserir($questao);
            if($verifica == true){
                echo "deu certo";
            }else{
                echo "deu errado";
            }
        }


    }

	/**
	Protocolo de aplicação
	1 - primeiro login
	null ou 0 - login comum
	*/
    /**
     * @param email
     * @param senha
     * @param protolo
     */
	public function realizalogin( $email, $senha, $protocolo ) {
		$senhaCrip = crypt( $senha, '$6$rounds=5000$ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789$' );
		//echo " a senha é " . $senhaCrip;
		$userdao = new UserDao();
		$resultado = $userdao->ler( $email, $senhaCrip );

		if ( $resultado != null ) {
			echo "existe resultado";
			//$resultado = pg_query($sql);
			$linha = pg_fetch_array( $resultado );

			echo "Os dados'" . $linha[ 'idusuario' ] . " | " . $linha[ 'nome' ] . " | " . $linha[ 'email' ] . " | " . $linha[ 'senha' ] . " | " . $linha[ 'privilegio' ] . "\n ";

			if ( $protocolo == 1 ) {
				$this->insereLog( 1, $linha[ 'idusuario' ], 'Novo cadastro realizado com sucesso.' );
			}

			$usuario = new Usuario( $linha[ 'nome' ], '', '', $linha[ 'email' ], '', $linha[ 'privilegio' ], $linha[ 'senha' ] );
			$usuario->setId( $linha[ 'idusuario' ] );

			//$_SESSION[ 'user' ] = serialize( $usuario );
			$_SESSION[ 'id' ] = $linha[ 'idusuario' ];
			$_SESSION[ 'nome' ] = $linha[ 'nome' ];
			$_SESSION[ 'privilegio' ] = $linha[ 'privilegio' ];

			$this->user = $usuario;
			if ( $linha[ 'privilegio' ] == 'N' ) {
				echo "usuario comum";
				header( 'location:../_view/paineldeusuario.php' );
			} else if ( $linha[ 'privilegio' ] == 'M' ) {
				echo "usuario moderador";
				//header( 'location:nossos-planos.html' );
			} else if ( $linha[ 'privilegio' ] == 'A' ) {
				echo "usuario adm";
				header( 'location:../_view/tela-inicial-adm.php' );
			}else if ( $linha[ 'privilegio' ] == 'B' ){
				echo "usuario banido";
				unset( $_SESSION[ 'id' ] );
				unset( $_SESSION[ 'nome' ] );
				unset( $_SESSION[ 'privilegio' ] );
				header( 'location:../_view/erros/userbanido.html' );
			}
		} else {
			echo ("<script>alert('Falha no login. Verifique o email e/ou a senha!!'); location.href='../index.html';</script>");
		}
		//echo "erro";
		//header( 'location:errologin.html' );
	}

    /**
     *
     */
    public function realizalogout() {
		if ( !isset( $_SESSION ) ) {
			session_start();
		}
		if ( ( isset( $_SESSION[ 'id' ] ) == true )and( $_SESSION[ 'id' ] != "" ) || ( isset( $_SESSION[ 'nome' ] ) == true )and( $_SESSION[ 'nome' ] != "" ) || ( isset( $_SESSION[ 'privilegio' ] ) == true )and( $_SESSION[ 'privilegio' ] != "" ) ) {
			unset( $_SESSION[ 'id' ] );
			unset( $_SESSION[ 'nome' ] );
			unset( $_SESSION[ 'privilegio' ] );
			session_destroy();
			header( 'location:../index.html' );
		} else {
			session_destroy();
		}
	}

	//OBS.: tipo_prova: 1 - Edição anteriores, 2 - Áreas especificas, 3 - Questões oficiais, 4 - Questões não oficiais, 5 - Questões mistas

    /**
     * @param $tipo_prova
     * @param $ano_or_area
     * @param $quant_quest
     * @return null|Prova
     */
    public function gerarProva($tipo_prova, $ano_or_area, $quant_quest) {
		$questaodao = new QuestaoDAO();
		$simuladodao = new SimuladoDAO();
		$respostasimuladodao = new RespostaSimuladoDAO();

		$prova = $this->verificarSimuladoAndamento($_SESSION['id']); // Verifica se existe um simulado em andamento. Caso haja o usuario é redirecionado para terminar o simulado.
		if($prova == null) {
            $questoes = [];
            $questoes = $questaodao->ler($tipo_prova, $ano_or_area, $quant_quest);

            if (sizeof($questoes) > 0) {
                $NTP = new DataHora();
                $time = $NTP->getDataHora();
                $simulado = new Simulado(-1, $_SESSION['id'], $time, 0, 0, "N");
                $simulado = $simuladodao->inserir($simulado);
                $prova = new Prova($simulado->getIdSimulado(), 2018, $simulado->getTipo(), sizeof($questoes, 0), $questoes);
                $prova->setDatahora($simulado->getDataSimulado());
                $respostasimuladodao->inserirVectorObjeto($simulado->getIdSimulado(), $questoes);
                return $prova;
            }
        } else {
		    return $prova;
        }
	}

    /**
     * @param $id_simulado
     * @param $resposta_questoes
     * @param $tempo
     */
    public function finalizarSimulado($id_simulado, $resposta_questoes, $tempo){
        $vectorResp = explode(',',$resposta_questoes);
        $resp_simdao = new RespostaSimuladoDAO();
        $resp_simdao->atualizarVetor($id_simulado, $vectorResp);
        $simuladodao = new SimuladoDAO();
        $simulado = $simuladodao->ler($id_simulado);
        $simulado->setTempo($tempo);
        $simulado->setPontuacao($this->gerarPontuacao($vectorResp));
        $simuladodao->atualizar($simulado);
    }

    /**
     * @param $id_usuario
     * @return null|Prova
     */
    public function verificarSimuladoAndamento($id_usuario){
        //return null;
	    $simuladodao = new SimuladoDAO();
        $resp_simdao = new RespostaSimuladoDAO();
        $questaodao  = new QuestaoDAO();

        $simulados = $simuladodao->lerIdUsuario($id_usuario); //Procura todos os simulados do usuario logado.
        foreach ($simulados as $s){
            if ($s->getTempo() == "0" || $s->getTempo() == "0:0:0"){ //Verifica se o simulado foi concluído.
                //echo "<script>alert(\"Existe um simulado em andamento. Ele será aberto.<br>OBS: As questões respondidas ainda não ficam salvas, logo, você deve responder tudo novamente.\")</script>";
                $id_questoes = $resp_simdao->obterIdQuestoesSimulado($s->getIdSimulado());
                $questoes = $questaodao->lerPorVetorIndex($id_questoes);
                $prova_realizar = new Prova($s->getidSimulado(), $s->getDataSimulado(), $s->getTipo(), sizeof($questoes, 0), $questoes);
                $prova_realizar->setDatahora($s->getDataSimulado());
                return $prova_realizar;
            }
        }
        return null;
    }

    /**
     * @param $idQuetao
     * @param $resposta
     * @param $idSimulado
     */
    public function atualizaResposta($idQuetao, $resposta, $idSimulado){
        $resp_simdao = new RespostaSimuladoDAO();
        $resp_simdao->atualizar($idQuetao,$resposta,$idSimulado);
    }

    /**
     * @param $idSimulado
     */
    public function obterRespostasQuestoes($idSimulado){
        $resp_simdao = new RespostaSimuladoDAO();
        return $resp_simdao->obterRepostaQuestoes($idSimulado);
    }

    /**
     * @param $resp
     * @return int
     */
    private function gerarPontuacao($resp){
        $questaodao = new QuestaoDAO();
        $valorPontuacao = 1;
        $pontuacaoTotal = 0;

	    foreach ($resp as $v){
            if(!empty($v[0]) && !empty($v[1])) {
                $vv = explode(':', $v);
                $id_q = $vv[0][0];
                $respp = $vv[1][0];
                $questao = $questaodao->lerPorIndex($id_q);
                if($questao->getRespostaCorreta() == $respp){
                    $pontuacaoTotal += $valorPontuacao;
                }
            }
        }
        return $pontuacaoTotal;
    }


    /**
     * Método resposável por avaliar a questão denunciada
     * @param $id_usuario
     * @param $id_questao
     * @param $avaliacao
     */
    public function avaliarQuestao($id_usuario, $id_questao, $avaliacao){
    	$avaliacaoDAO = new AvaliacaoDAO();
    	$avaliacaoDAO->inserirAvaliacao($id_usuario, $id_questao, $avaliacao);
    	
    }


    /**
     * Método responsável por transformar um usuário em "moderador"
     * @param $id
     * @return bool
     */
    public function promoverModerador($id ) {
		$userdao = new UserDao();
		$result = $userdao->atualizar( 'privilegio', 'M', $id );
        if($result==false){
            return false;
        }
        $linha = pg_fetch_array($result);
        // não retornar privilegio
        return $linha['privilegio'];
	}


    /**
     * Método resposável por transformar um usuário em "administrador"
     * @param $id
     * @return bool
     */
    public function promoverAdministridador($id ) {
		$userdao = new UserDao();
		$result = $userdao->atualizar( 'privilegio', 'A', $id );
        if($result==false){
            return false;
        }
        $linha = pg_fetch_array($result);
        return $linha['privilegio'];
	}

    /**
     * Método responsável por transformar em "normal" o priviçlégio de um usuário
     * @param $id
     * @return bool
     */
    public function removerPrivilegio($id ) {
		$userdao = new UserDao();
		$result = $userdao->atualizar( 'privilegio', 'N', $id );
		if($result==false){
		    return false;
        }
        $linha = pg_fetch_array($result);
		return $linha['privilegio'];
	}

    /**
     * Método responsável por buscar usuários do sistema
     * @param $nome
     * @return array|bool
     */
    public function buscarUsuarios($nome){
	    $userdao = new UserDao();
	    $result = $userdao->buscar($nome, 0);
	    if($result==false){
	        return false;
        }
        $matriz = array();
	    $i = 0;
        while($escrever=pg_fetch_array($result)){
            $usuario = $this->getUsuario($escrever);
            $matriz[$i] = $usuario;
            $i++;
        }
	    return $matriz;
    }

    /**
     * @param $escrever
     * @return Usuario
     */
    private function getUsuario($escrever){
        $usuario = new Usuario( $escrever[1], null, null, $escrever[2],null, $escrever[3], null );
        $usuario->setId($escrever[0]);
        return $usuario;
    }

    /**
     * Método responsável por verificar o privilégio de um usuário do sistema
     * @param $id
     * @return bool
     */
    public function verificarPrivilegio($id){
	    $userdao = new UserDao();
	    $result = $userdao->buscar(null,$id);
	    if($result==false){
	        return false;
        }
	    $linha = pg_fetch_array($result);
	    return $linha['privilegio'];
    }

    /**
     * Método responsável por banir usuário do sistema
     * @param $id
     * @return bool
     */
    public function banirUsuario($id){
        $userdao = new UserDao();
        $result = $userdao->atualizar('privilegio', 'B', $id);
        if($result === false){
            return false;
        }
        $linha = pg_fetch_array($result);
        return $linha['privilegio'];
    }

	/**
	1 - cadastro de usuário
	2 - promoção de usuário
	3 - exclusão de usuário
	4 - banimento de usuário
	5 - submissão de questão
	6 - realização de simulado
	7 - inserção de prova oficial
	*/

    /**
     * Método responsável por inserir log no sistema
     * @param $tipo
     * @param $idusuario
     * @param $descricao
     * @return bool
     */
    public function insereLog($tipo, $idusuario, $descricao ) {
		echo "---nova inserção de log os dados são: " . $tipo . " | " . $idusuario . " | " . $descricao;
		if ( $tipo > 0 && $tipo < 8 || $descricao != "" || $descricao != NULL ) {
			$dao = new LogDao();
			$dao->inserir( $idusuario, $tipo, $descricao );
			echo "\n log inserido \n";
			return true;
		}
		return false;

	}


    /**
     * Método responsável por inserir uma denúncia no sistema
     * @param $idquestao
     * @param $idusuario
     * @param $data
     * @return bool
     */
    public function inserirDenuncia($idquestao, $idusuario, $data, $observacao){
	    $denuncia = new Denuncia($idquestao,$data,$idusuario,$observacao);
    	$denunciadao = new denunciadao();
	    $result = $denunciadao->inserir($denuncia);
	    if ($result==true){
	        return true;
        }else{
	        return false;
        }
    }

    /**
     * Método responsável por buscar todas as denúncias
     * @return array|bool
     */
    public function buscarDenuncia(){
        $denunciadao = new denunciadao();
        $result = $denunciadao->buscar();
        if($result==false){
            return false;
        }
        $matriz = array();
        $i = 0;
        while($escrever=pg_fetch_array($result)){
            $denuncia = $this->getDenuncia($escrever);
            $matriz[$i] = $denuncia;
            $i++;
        }
        return $matriz;

    }

    /**
     * @param $escrever
     * @return Denuncia
     */
    private function getDenuncia($escrever){
        $denuncia = new Denuncia($escrever[2],$escrever[4],$escrever[1], $escrever[3]);
        $denuncia->setId($escrever[0]);
        return $denuncia;
    }

    /**
     * Método responsável por cadastrar prova oficial
     * @param $qtdQuestoes
     * @param $idUser
     * @param $ano
     */
    public function cadastraProvaOficial($qtdQuestoes, $idUser, $ano){
		
			$dao = new ProvaDao();
			$dao->inserir( $qtdQuestoes, $ano );
			echo "\n inserir log aqui \n";
			$this->insereLog( 7, $idUser, "Inserção de prova oficial" );
	}



    /**
     * Método responsável por buscar todos os logs do sistema
     * @return array|bool
     */
    public function buscarLog(){
		$logdao = new LogDao();
		$result = $logdao->buscarLogs();
        if($result==false){
            return false;
        }
        $matriz = array();
        $i = 0;
        while($escrever=pg_fetch_array($result)){
            $log = $this->getLog($escrever);
            $matriz[$i] = $log;
            $i++;
        }
        return $matriz;
	}

    /**
     * @param $escrever
     * @return Log
     */
    private function getLog($escrever){
		$log = new Log($escrever[0], $escrever[1], $escrever[2], $escrever[3], $escrever[4]);
		return $log;
	}


    /**
     * Método responsável por fazer a busca de logs do sistema de acordo com a data selecionada
     * @param $dataini
     * @param $datafim
     * @return array|bool
     */
    public function buscarLogsFiltro($dataini, $datafim){
		$logdao = new LogDao();
		$result = $logdao->buscarLogsPeriodo($dataini,$datafim);
        if($result==false){
            return false;
        }
        $matriz = array();
        $i = 0;
        while($escrever=pg_fetch_array($result)){
            $log = $this->getLog($escrever);
            $matriz[$i] = $log;
            $i++;
        }
        return $matriz;
	}

    /**
     * @param $enunciado
     * @param $questaoa
     * @param $questaob
     * @param $questaoc
     * @param $questaod
     * @param $questaoe
     * @param $questaocorreta
     * @param $areaconhecimento
     * @param $ano
     */
    //Método responsável pelo cadastro de questão
    /**
     * @param $enunciado
     * @param $questaoa
     * @param $questaob
     * @param $questaoc
     * @param $questaod
     * @param $questaoe
     * @param $questaocorreta
     * @param $areaconhecimento
     * @param $ano
     */
    public function cadastraQuestao($enunciado, $questaoa, $questaob, $questaoc, $questaod, $questaoe, $questaocorreta, $areaconhecimento, $ano){
        $provadao = new ProvaDao();
        $q = $provadao->buscarProva($ano);
        $idprova = $q->getId();

        $questaodao = new QuestaoDAO();
        $questao = new Questao(-1, $_SESSION['id'], $idprova, $areaconhecimento, $enunciado,"S", $questaoa, $questaob, $questaoc, $questaod, $questaoe, $questaocorreta);

        $questaodao->inserir($questao);
    }

    /**
     * @param id
     * @param data
     * @return resultado
     */
    public function buscarPontuacao($id, $data){
        $dao = new UserDao();
        $resultado = $dao->buscarPontuacao($id, $data);
        return $resultado;
    }
	
	/**
	*@param id
    * @param privilegio
    * @return resultado
	*/
	 public function alteraprivilegioUsuario($id, $privilegio){
        $userdao = new UserDao();
        $result = $userdao->atualizar('privilegio', $privilegio, $id);
        if($result === false){
            return false;
        }
        $linha = pg_fetch_array($result);
        return $linha['privilegio'];
    }
	
	/**
     * @param $escrever
     * @return Denuncia
     */
    private function getFeedback($escrever){
        $feedback = new Feedback($escrever[1],$escrever[2],$escrever[3]);
        $feedback->setIdfeed($escrever[0]);
        return $feedback;
    }
	
	/**
     * Método responsável por buscar todas os feedbacks
     * @return array|bool
     */
    public function buscarFeedback(){
        $feedbackdao = new FeedbackDao();
        $result = $feedbackdao->buscar();
        if($result==false){
            return false;
        }
        
        return $result;

    }
}
?>
