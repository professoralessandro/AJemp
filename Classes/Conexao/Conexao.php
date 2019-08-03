<?php

namespace Conexao;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexao
 *
 * @author profe
 */
class Conexao {

    //PROPRIEDADES
    private $servidor;
    private $usuario;
    private $senha;
    private $nomeBanco;
    private $banco;

    //CONTRUTOR DA CLASSE
    function __construct($servidor = "localhost", $usuario = "root", $senha = "", $nomeBanco = "AJempDBDAO") {
        $this->SetServidor($servidor);
        $this->SetUsuario($usuario);
        $this->SetSenha($senha);
        $this->SetNomeBanco($nomeBanco);
        $this->Conectar();
    }

    //METODOS GET AND SET
    public function SetServidor($valor) {
        $this->servidor = $valor;
    }

    public function GetServidor() {
        return $this->servidor;
    }

    public function SetUsuario($valor) {
        $this->usuario = $valor;
    }

    public function GetUauario() {
        return $this->usuario;
    }

    public function SetSenha($valor) {
        $this->senha = $valor;
    }

    public function GetSenha() {
        return $this->senha;
    }

    public function SetNomeBanco($valor) {
        $this->nomeBanco = $valor;
    }

    public function GetNomeBanco() {
        return $this->nomeBanco;
    }

    public function GetBanco() {
        return $this->banco;
    }

    //METODOS
    public function Conectar() {
        $this->banco = new mysqli($this->GetServidor(), $this->GetUauario(), $this->GetSenha(), $this->GetNomeBanco());
        if ($this->banco->connect_error) {
            die('Erro de conexão(' . $this->banco->connect_errno . '):' . $this->banco->connect_error);
        }
    }

//CONECTAR

    public function Desconectar() {
        $this->banco->close();
    }

//Desconectar
}
