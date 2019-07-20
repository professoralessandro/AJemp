<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

/**
 * Description of Permissao
 *
 * @author Alessandro dos Santos
 * Date: 06-07-2019
 */
class Permissao
{
    //ATRIBUTOS
    private $idPermissao;
    private $tipoPermissao;
    private $ativo;
    
    //CONSTRUTORES
    function __construct($idPermissao = "", $tipoPermissao = "", $ativo = "")
    {
        $this->idPermissao = $idPermissao;
        $this->tipoPermissao = $tipoPermissao;
        $this->ativo = $ativo;
    }

    
    //PROPRIEDADES
    public function getIdPermissao()
    {
        return $this->idPermissao;
    }

    public function getTipoPermissao()
    {
        return $this->tipoPermissao;
    }

    public function getAtivo()
    {
        return $this->ativo;
    }

    public function setIdPermissao($idPermissao)
    {
        $this->idPermissao = $idPermissao;
        return $this;
    }

    public function setTipoPermissao($tipoPermissao)
    {
        $this->tipoPermissao = $tipoPermissao;
        return $this;
    }

    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
        return $this;
    }
    //PROPRIEDADES
}//CLASS
