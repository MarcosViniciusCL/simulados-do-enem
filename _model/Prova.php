<?php
/**
 * Created by PhpStorm.
 * User: allan
 * Date: 11/12/2017
 * Time: 13:17
 */

class Prova implements JsonSerializable
{
    private $id;
    private $ano;
    private $tipo;
    private $qtdquestoes;
    private $questoes;
    private $indexAtualQuest;
    private $datahora;

    /**
     * Prova constructor.
     * @param $id
     * @param $ano
     * @param $tipo
     * @param $qtdquestoes
     * @param $questoes
     */
    public function __construct($id, $ano, $tipo, $qtdquestoes, $questoes)
    {
        $this->id = $id;
        $this->ano = $ano;
        $this->tipo = $tipo;
        $this->qtdquestoes = $qtdquestoes;
        $this->questoes = $questoes;
        $this->indexAtualQuest = 0;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * @param mixed $ano
     */
    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getQtdquestoes()
    {
        return $this->qtdquestoes;
    }

    /**
     * @param mixed $qtdquestoes
     */
    public function setQtdquestoes($qtdquestoes)
    {
        $this->qtdquestoes = $qtdquestoes;
    }

    /**
     * @return mixed
     */
    public function getQuestoes()
    {
        return $this->questoes;
    }

    /**
     * @param mixed $questoes
     */
    public function setQuestoes($questoes)
    {
        $this->questoes = $questoes;
    }

    /**
     * @return mixed
     */
    public function getDatahora()
    {
        return $this->datahora;
    }

    /**
     * @param mixed $datahora
     */
    public function setDatahora($datahora){
        $this->datahora = $datahora;
    }


    public function getQuestao($index) {
        $this->indexAtualQuest = $index-1;
        return $this->questoes[$this->indexAtualQuest];
    }

    public function getQuestaoAtual() {
        return $this->questoes[$this->indexAtualQuest];
    }

    public function proximaQuestao() {
        $this->indexAtualQuest++;
        echo "alert(\"proximaQuestao\");";
    }

    public function anteriorQuestao() {
        $this->indexAtualQuest--;
        
    }

    /**
     * @return array|mixed
     */
    public function jsonSerialize() {
        return [
            'idProva' => $this->getId(),
            'dataprova' => $this->getDatahora(),
            'questoes' => $this->getQuestoes()
        ];
    }
}