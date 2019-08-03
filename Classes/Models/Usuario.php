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
class Usuario {

    //ATRIBUTOS
    private $idUsuario;
    private $razaoSocial;
    private $nomeUsuario;
    private $CPF;
    private $CNPJ;
    private $password;
    private $email;
    private $telefone;
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
    function __construct($idUsuario = "", $razaoSocial = "", $nomeUsuario = "", $CPF = "", $CNPJ = "", $password = "", $email = "", $telefone = "", $endereco = "", $bairro = "", $cidade = "", $estado = "", $cep = "", $imagem = "", $idUsuarioAlteracao = "", $dataCadastro = "", $dataUltimaAlteracao = "", $ativo = "") {
        $this->idUsuario = $idUsuario;
        $this->razaoSocial = $razaoSocial;
        $this->nomeUsuario = $nomeUsuario;
        $this->CPF = $CPF;
        $this->CNPJ = $CNPJ;
        $this->password = $password;
        $this->email = $email;
        $this->telefone = $telefone;
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
    }//CONSTRUTOR

    //PROPRIEDADES
    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getRazaoSocial() {
        return $this->razaoSocial;
    }

    public function getNomeUsuario() {
        return $this->nomeUsuario;
    }

    public function getCPF() {
        return $this->CPF;
    }

    public function getCNPJ() {
        return $this->CNPJ;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefone() {
        return $this->telefone;
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

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
        return $this;
    }

    public function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

    public function setNomeUsuario($nomeUsuario) {
        $this->nomeUsuario = $nomeUsuario;
        return $this;
    }

    public function setCPF($CPF) {
        $this->CPF = $CPF;
        return $this;
    }

    public function setCNPJ($CNPJ) {
        $this->CNPJ = $CNPJ;
        return $this;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
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
