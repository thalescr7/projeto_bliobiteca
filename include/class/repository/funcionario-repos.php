<?php

class FuncionarioRepository implements Repository{
    public static function listAll(){
        $db = DB::getInstance();
        $sql = "SELECT * FROM funcionario WHERE id = :id";
        $query = $db->prepare($sql);
        $query->execute();

        $list = array();
        foreach($query->fetchAll(PDO::FETCH_OBJ) as  $row){
            $funcionario = new Autor;
            $funcionario->setId($row->id);
            $funcionario->setNome($row->nome);
            $funcionario->setTelefone($row->telefone);
            $funcionario->setEmail($row->email);
            $cliente->setSenha($row->senha);
            $funcionario->setCpf($row->cpf);
            $funcionario->setRg($row->rg);
            $funcionario->setData_inclusao($row->dt_inclusao);
            $funcionario->setData_alteracao($row->dt_alteracao);
            $funcionario->setinclusao_funcionario_id($row->inclusao_funcionario_id);
            $funcionario->setAlteracao_funcionario_id($row->alteracao_funcionario_id);
            $list[] = $autor;
        }
        return $list;
    }
    public static function get($id){
        $db = DB::getInstance();
        $sql = "SELECT * FROM funcionario WHERE id = :id";
        $query = $db->prepare($sql);
        $query->bindParam(":id",$id);
        $query->execute();
    
        if($query->rowCount() > 0){
            $row = $query->fetch(PDO::FETCH_OBJ);
            $funcionario = new Autor;
            $funcionario->setId($row->id);
            $funcionario->setNome($row->nome);
            $funcionario->setTelefone($row->telefone);
            $funcionario->setEmail($row->email);
            $cliente->setSenha($row->senha);
            $funcionario->setCpf($row->cpf);
            $funcionario->setRg($row->rg);
            $funcionario->setData_inclusao($row->dt_inclusao);
            $funcionario->setData_alteracao($row->dt_alteracao);
            $funcionario->setinclusao_funcionario_id($row->inclusao_funcionario_id);
            $funcionario->setAlteracao_funcionario_id($row->alteracao_funcionario_id);
            return $funcionario;
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