<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

/**
 * Description of Usuario
 *
 * @author Alessandro dos Santos
 * Date: 06-07-2019
 */
class Usuario
{
    //ATRIBUTOS
    private $idUsuario;
    private $nomeUsuario;
    private $password;
    private $email;
    private $telefone;
    private $ativo;
    private $endereco;
    private $bairro;
    private $cidade;
    private $estado;
    private $cep;
    
    //CONSTRUTOR
    function __construct($idUsuario = "", $nomeUsuario = "", $password = "", $email = "", $telefone = "", $ativo = "", $endereco = "", $bairro = "", $cidade = "", $estado = "", $cep = "")
    {
        $this->idUsuario = $idUsuario;
        $this->nomeUsuario = $nomeUsuario;
        $this->password = $password;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->ativo = $ativo;
        $this->endereco = $endereco;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
    }

    
    //PROPRIEDADES
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function getNomeUsuario()
    {
        return $this->nomeUsuario;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getAtivo()
    {
        return $this->ativo;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
        return $this;
    }

    public function setNomeUsuario($nomeUsuario)
    {
        $this->nomeUsuario = $nomeUsuario;
        return $this;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
        return $this;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
        return $this;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
        return $this;
    }
    //PROPRIEDADES
}