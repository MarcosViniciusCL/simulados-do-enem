<?php 
/**
* 
*/
class AvaliacaoDAO {
	
	public function __construct() {
		# code...
	}
   /**
     * @param $id_usuario
     * @param id_questao
     * @param avaliacao
     */
	public function inserirAvaliacao($id_usuario, $id_questao, $avaliacao){
         $banc = Bd::getInstance();
         $obanco = $banc->abrirconexao();

         $SQL = "INSERT INTO avaliacaoquestao(idusuario, idquestao, avaliacao) VALUES ($id_usuario, $id_questao, $avaliacao)"; 
         pg_query($obanco, $SQL);
         $banc->fecharconexao();
    }
}
?>