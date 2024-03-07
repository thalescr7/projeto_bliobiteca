<?php

class ClienteRepository implements Repository{
    public static function listAll(){
        $db = DB::getInstance();
        $sql = "SELECT * FROM cliente WHERE id = :id";
        $query = $db->prepare($sql);
        $query->execute();

        $list = array();
        foreach($query->fetchAll(PDO::FETCH_OBJ) as  $row){
            $cliente = new Autor;
            $cliente->setId($row->id);
            $cliente->setNome($row->nome);
            $cliente->setTelefone($row->telefone);
            $cliente->setEmail($row->email);
            $cliente->setCpf($row->cpf);
            $cliente->setRg($row->rg);
            $cliente->setData_nascimento($row->data_nascimento);
            $cliente->setData_inclusao($row->data_inclusao);
            $cliente->setData_alteracao($row->data_alteracao);
            $cliente->setInclusao_funcionario_id($row->inclusao_funcionario_id);
            $cliente->setAlteracao_funcionario_id($row->alteracao_funcionario_id);
            $list[] = $autor;
        }
        return $list;
    }
    public static function get($id){
        $db = DB::getInstance();
        $sql = "SELECT * FROM cliente WHERE id = :id";
        $query = $db->prepare($sql);
        $query->bindParam(":id",$id);
        $query->execute();
        if($query->rowCount() > 0){ 
            $row = $query->fetch(PDO::FETCH_OBJ);
            $cliente = new Autor;
            $cliente->setId($row->id);
            $cliente->setNome($row->nome);
            $cliente->setTelefone($row->telefone);
            $cliente->setEmail($row->email);
            $cliente->setCpf($row->cpf);
            $cliente->setRg($row->rg);
            $cliente->setData_nascimento($row->data_nascimento);
            $cliente->setData_inclusao($row->data_inclusao);
            $cliente->setData_alteracao($row->data_alteracao);
            $cliente->setInclusao_funcionario_id($row->inclusao_funcionario_id);
            $cliente->setAlteracao_funcionario_id($row->alteracao_funcionario_id);
            return $cliente;
        };
        return null;
    }
    public static function insert($obj){

    }
    public static function update($obj){

    }
    public static function delete($id){

    }
}