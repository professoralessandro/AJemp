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
class Loja {

    //ATRIBUTOS
    private $idLoja;
    private $CNPJ;
    private $razaoSocial;
    private $nomeFantasia;
    private $email;
    private $endereco;
    private $bairro;
    private $cidade;
    private $estado;
    private $cep;
    private $imagem;
    private $idUsuarioAlteracao;
    private $dataCadastro;
    private $dataUltimaAlteracao;
    private $ativo;

    //CONSTRUTOR
    function __construct($idLoja = "", $CNPJ = "", $razaoSocial = "", $nomeFantasia = "", $email = "", $endereco = "", $bairro = "", $cidade = "", $estado = "", $cep = "", $imagem = "", $idUsuarioAlteracao = "", $dataCadastro = "", $dataUltimaAlteracao = "", $ativo = "") {
        $this->idLoja = $idLoja;
        $this->CNPJ = $CNPJ;
        $this->razaoSocial = $razaoSocial;
        $this->nomeFantasia = $nomeFantasia;
        $this->email = $email;
        $this->endereco = $endereco;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
        $this->imagem = $imagem;
        $this->idUsuarioAlteracao = $idUsuarioAlteracao;
        $this->dataCadastro = $dataCadastro;
        $this->dataUltimaAlteracao = $dataUltimaAlteracao;
        $this->ativo = $ativo;
    }

    //PROPRIEDADES
    public function getIdLoja() {
        return $this->idLoja;
    }

    public function getCNPJ() {
        return $this->CNPJ;
    }

    public function getRazaoSocial() {
        return $this->razaoSocial;
    }

    public function getNomeFantasia() {
        return $this->nomeFantasia;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getCep() {
        return $this->cep;
    }

    public function getImagem() {
        return $this->imagem;
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

    public function setIdLoja($idLoja) {
        $this->idLoja = $idLoja;
        return $this;
    }

    public function setCNPJ($CNPJ) {
        $this->CNPJ = $CNPJ;
        return $this;
    }

    public function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

    public function setNomeFantasia($nomeFantasia) {
        $this->nomeFantasia = $nomeFantasia;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
        return $this;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
        return $this;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
        return $this;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
        return $this;
    }

    public function setCep($cep) {
        $this->cep = $cep;
        return $this;
    }

    public function setImagem($imagem) {
        $this->imagem = $imagem;
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
