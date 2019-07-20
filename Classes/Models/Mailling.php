<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

/**
 * Description of Mailling
 *
 * @author Alessandro dos Santos
 * Date: 06-07-2019
 */
class Mailling
{
    //ATRIBUTOS
    private $idMailling;
    private $emailDestinatario;
    private $assunto;
    private $mensagem;
    private $foiEnviado; //REMOVER
    private $status;
    private $ativo;
    
    //CONSTRUTORES
    function __construct($idMailling ="", $emailDestinatario ="", $assunto ="", $mensagem ="", $foiEnviado ="", $status ="", $ativo ="")
    {
        $this->idMailling = $idMailling;
        $this->emailDestinatario = $emailDestinatario;
        $this->assunto = $assunto;
        $this->mensagem = $mensagem;
        $this->foiEnviado = $foiEnviado;
        $this->status = $status;
        $this->ativo = $ativo;
    }
    
    //PROPRIEDADES
    public function getIdMailling()
    {
        return $this->idMailling;
    }

    public function getEmailDestinatario()
    {
        return $this->emailDestinatario;
    }

    public function getAssunto()
    {
        return $this->assunto;
    }

    public function getMensagem()
    {
        return $this->mensagem;
    }

    public function getFoiEnviado()
    {
        return $this->foiEnviado;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getAtivo()
    {
        return $this->ativo;
    }

    public function setIdMailling($idMailling)
    {
        $this->idMailling = $idMailling;
        return $this;
    }

    public function setEmailDestinatario($emailDestinatario)
    {
        $this->emailDestinatario = $emailDestinatario;
        return $this;
    }

    public function setAssunto($assunto)
    {
        $this->assunto = $assunto;
        return $this;
    }

    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;
        return $this;
    }

    public function setFoiEnviado($foiEnviado)
    {
        $this->foiEnviado = $foiEnviado;
        return $this;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
        return $this;
    }
    //PROPRIEDADES
}
