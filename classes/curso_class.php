<?php
require_once('banco_class.php');

 

class Curso{
    // Atributos:
    public $id;
    public $nomeCurso;
    public $dataInicio;
    public $dataFim;

 

    // Ações (super poderes da classe):
    public function Inserir(){
        $sql = "INSERT INTO curso (nome_curso, data_inicio, data_fim) VALUES(?,?,?)";
        // Trabalhar com o banco:
        // Conectando:
        $banco = Banco::conectar();
        // Transformar a string em comando sql:
        $comando = $banco->prepare($sql);
        // Executar e subsitituir os coringas (?):
        $comando->execute(array($this->nomeCurso, $this->dataInicio, $this->dataFim));
        // Desconectar do banco:
        Banco::desconectar();
    }
    public function Listar(){
        $banco = Banco::conectar();
        $sql = "SELECT * FROM curso";
        $comando = $banco->prepare($sql);
        $comando->execute();
        // "Salvar" o resultado da consulta (tabela) na $resultado
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }

 

    public function Deletar(){
        $banco = Banco::conectar();
        $sql = "DELETE FROM curso WHERE id_curso = ?";
        $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $comando = $banco->prepare($sql);
        $comando->execute(array($this->id));
        Banco::desconectar();
        // Retornar quantidade de linhas apagadas:
        echo "Registro deletado com sucesso $this->id"; 
        return $comando->rowCount();
     
    }

 

    //public function Atualizar(){
       //$banco = Banco::conectar();
        //$sql = "UPDATE docente SET nome_docente = ?, email_docente = ?, telefone_docente = ? WHERE id_docente = ?";
        //$banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // $comando = $banco->prepare($sql);
       // $comando->execute(array($this->nome, $this->email, $this->telefone, $this->id));
       // Banco::desconectar();
        // Retornar quantidade de linhas alteradas:
        //return $comando->rowCount();
    //}

 

    //public function BuscarPorID(){
       // $banco = Banco::conectar();
        //$sql = "SELECT * FROM contatos WHERE id = ?";
       // $comando = $banco->prepare($sql);
       // $comando->execute(array($this->id));
        // "Salvar" o resultado da consulta (tabela) na $resultado
        //$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
       // Banco::desconectar();
       // return $resultado;
    //}
}
?>