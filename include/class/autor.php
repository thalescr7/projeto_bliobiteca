<?php

class Autor{
    private $id;
    private $nome;
    private $data_inclusao;
    private $data_alteracao;
    private $inclusao_funcionario_id; 
    private $alteracao_funcionario_id; 

    public function getId(){
        return  $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getdataInclusao() {
        return $this->data_inclusao;
    }
    public function setdataInclusao($data_inclusao){
        $this->data_inclusao = $data_inclusao;
    }

    public function getdataAlteracao() {
        return $this->data_alteracao;
    }
    public function setdataAlteracao($data_alteracao){
        $this->data_alteracao = $data_alteracao;
    }

    public function getinclusaoFuncionarioId() {
        return $this->inclusao_funcionario_id;
    }
    public function setinclusaoFuncionarioId($inclusao_funcionario_id){
        $this->inclusao_funcionario_id = $inclusao_funcionario_id;
    }

    public function getalteracaoFuncionarioId() {
        return $this->alteracao_funcionario_id;
    }
    public function setalteracaoFuncionarioId($alteracao_funcionario_id){
        $this->alteracao_funcionario_id = $alteracao_funcionario_id;
    }
}
