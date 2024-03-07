<?php

class EmprestimoRepository implements Repository{
    public static function listAll(){
        $db = DB::getInstance();
        $sql = "SELECT * FROM emprestimo WHERE id = :id";
        $query = $db->prepare($sql);
        $query->execute();

        $list = array();
        foreach($query->fetchAll(PDO::FETCH_OBJ) as  $row){
            $emprestimo = new Autor;
            $emprestimo->setId($row->id);
            $emprestimo->setLivroId($row->livro_id);
            $emprestimo->setClienteId($row->cliente_id);
            $emprestimo->setData_vencimento($row->data_vencimento);
            $emprestimo->setData_inclusao($row->data_inclusao);
            $emprestimo->setData_alteracao($row->data_alteracao);
            $emprestimo->setData_renovacao($row->data_renovacao);
            $emprestimo->setData_devolucao($row->data_devolucao);
            $emprestimo->setinclusao_funcionario_id($row->inclusao_funcionario_id);
            $emprestimo->setAlteracao_funcionario_id($row->alteracao_funcionario_id);
            $emprestimo->setRenovacao_funcionario_id($row->renovacao_funcionario_id);
            $emprestimo->setDevolucao_funcionario_id($row->devolucao_funcionario_id);
            $list[] = $autor;
        }
        return $list;
    }
    public static function get($id){
        $db = DB::getInstance();
        $sql = "SELECT * FROM emprestimo WHERE id = :id";
        $query = $db->prepare($sql);
        $query->bindParam(":id",$id);
        $query->execute();
    
        if($query->rowCount() > 0){
            $row = $query->fetch(PDO::FETCH_OBJ);
            $emprestimo = new Autor;
            $emprestimo->setId($row->id);
            $emprestimo->setLivroId($row->livro_id);
            $emprestimo->setClienteId($row->cliente_id);
            $emprestimo->setData_vencimento($row->data_vencimento);
            $emprestimo->setData_inclusao($row->data_inclusao);
            $emprestimo->setData_alteracao($row->data_alteracao);
            $emprestimo->setData_renovacao($row->data_renovacao);
            $emprestimo->setData_devolucao($row->data_devolucao);
            $emprestimo->setinclusao_funcionario_id($row->inclusao_funcionario_id);
            $emprestimo->setAlteracao_funcionario_id($row->alteracao_funcionario_id);
            $emprestimo->setRenovacao_funcionario_id($row->renovacao_funcionario_id);
            $emprestimo->setDevolucao_funcionario_id($row->devolucao_funcionario_id);
            return $emprestimo;
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