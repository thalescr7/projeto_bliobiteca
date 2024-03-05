<?php

class LivroRepository implements Repository{
    public static function listAll(){
        $db = DB::getInstance();
        $sql = "SELECT * FROM livro";
        $query = $db->prepare($sql);
        $query->execute();

        $list = array();
        foreach($query->fetchAll(PDO::FETCH_OBJ) as  $row){
            $livro = new Autor;
            $livro->setId($row->id);
            $livro->setTitulo($row->titulo);
            $livro->setData_inclusao($row->dt_inclusao);
            $livro->setData_alteracao($row->dt_alteracao);
            $livro->setinclusao_funcionario_id($row->inclusao_funcionario_id);
            $livro->setAlteracao_funcionario_id($row->alteracao_funcionario_id);
            $list[] = $livro;
        }
        return $list;
    }
    public static function get($id){
        $db = DB::getInstance();
        $sql = "SELECT * FROM livro WHERE id = :id";
        $query = $db->prepare($sql);
        $query->bindParam(":id",$id);
        $query->execute();
    
        if($query->rowCount() > 0){
            $row = $query->fetch(PDO::FETCH_OBJ);
            $livro = new Autor;
            $livro->setId($row->id);
            $livro->setNome($row->nome);
            $livro->setData_inclusao($row->dt_inclusao);
            $livro->setData_alteracao($row->dt_alteracao);
            $livro->setinclusao_funcionario_id($row->inclusao_funcionario_id);
            $livro->setAlteracao_funcionario_id($row->alteracao_funcionario_id);
            return $livro;
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