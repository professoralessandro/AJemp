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
    private $idUsuarioAlteracao;
    private $dataCadastro;
    private $dataUltimaAlteracao;
    private $ativo;
    
    //CONSTRUTORES
    function __construct($idPermissao = "", $tipoPermissao = "", $idUsuarioAlteracao = "", $dataCadastro = "", $dataUltimaAlteracao = "", $ativo = "") {
        $this->idPermissao = $idPermissao;
        $this->tipoPermissao = $tipoPermissao;
        $this->idUsuarioAlteracao = $idUsuarioAlteracao;
        $this->dataCadastro = $dataCadastro;
        $this->dataUltimaAlteracao = $dataUltimaAlteracao;
        $this->ativo = $ativo;
    }

    
    //PROPRIEDADES
    public function getIdPermissao() {
        return $this->idPermissao;
    }

    public function getTipoPermissao() {
        return $this->tipoPermissao;
    }

    public function getIdUsuarioAlteracao() {
        return $this->idUsuarioAlteracao;
    }

    public function getDataCadastro() {
        return $this->dataCadastro;
    }

    public function getDataUltimaAlteracao() {
        return $this->dataUltimaAlteracao;
    }

    public function getAtivo() {
        return $this->ativo;
    }

    public function setIdPermissao($idPermissao) {
        $this->idPermissao = $idPermissao;
        return $this;
    }

    public function setTipoPermissao($tipoPermissao) {
        $this->tipoPermissao = $tipoPermissao;
        return $this;
    }

    public function setIdUsuarioAlteracao($idUsuarioAlteracao) {
        $this->idUsuarioAlteracao = $idUsuarioAlteracao;
        return $this;
    }

    public function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
        return $this;
    }

    public function setDataUltimaAlteracao($dataUltimaAlteracao) {
        $this->dataUltimaAlteracao = $dataUltimaAlteracao;
        return $this;
    }

    public function setAtivo($ativo) {
        $this->ativo = $ativo;
        return $this;
    }
    //PROPRIEDADES
}//CLASS
