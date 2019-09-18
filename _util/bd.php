<?php

class Bd {
	private $host = "localhost";
	private $db = "mi";
	private $user = "administrador";
	private $pass = "sosenemadmin";
	public $banco;
	public $verificador = false;
	public static $instance = null;

    /**
     * Bd constructor.
     */
	 private function __construct() {
        $this->banco = pg_connect( "host=$this->host port=5432 dbname=$this->db user=$this->user password=$this->pass" )  or die ("Erro na conexão");
		 $verificador = false;
    }

    /**
     * @return Bd|null
     */
	public static function getInstance() {
        if (self::$instance == NULL) {
			self::$instance = new Bd();
        }
        return self::$instance;
    }
	//

    /**
     * Mwtodo responsavel por zerar a instancia unica do banco de dados
     */
    public static function zeraSingleton(){
		fechaconexao();
		
		self::$instance = new Bd();
        
	}
	//

    /**
     * Metodo responsavel por abrir a conexao do banco de dados
     * @return resource
     */
    function abrirconexao() {
		if($this->verificador == false){
			if($this->banco){
			 //echo "++Conexão com o PostgreSQL realizada com sucesso!!<br /><br />";
				return $this->banco;
		 }else{
			echo "++Erro ao abrir conexão!<br /><br />";
			}
		}
    }

    /**
     * Mwtodo responsavel por fechar a conexao do banco de dados
     * @return bool
     */
    function fecharconexao(){
		if($this->verificador == true){
			pg_close( $this->banco );
		}else{
			return false;
		}
	}

    /**
     * @return resource
     */
    public function getBanco()
    {
        return $this->banco;
    }
	
	
}


?>