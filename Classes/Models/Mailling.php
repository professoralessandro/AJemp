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
class Mailling {

    //ATRIBUTOS
    private $idMailling;
    private $idUsuario;
    private $emailEmitente;
    private $emailDestinatario;
    private $assunto;
    private $dataEnvio;
    private $mensagem;
    private $status;
    private $idUsuarioAlteracao;
    private $dataCadastro;
    private $dataUltimaAlteracao;
    private $ativo;

    //CONSTRUTORES
    function __construct($idMailling = "", $idUsuario = "", $emailEmitente = "", $emailDestinatario = "", $assunto = "", $dataEnvio = "", $mensagem = "", $status = "", $idUsuarioAlteracao = "", $dataCadastro = "", $dataUltimaAlteracao = "", $ativo = "") {
        $this->idMailling = $idMailling;
        $this->idUsuario = $idUsuario;
        $this->emailEmitente = $emailEmitente;
        $this->emailDestinatario = $emailDestinatario;
        $this->assunto = $assunto;
        $this->dataEnvio = $dataEnvio;
        $this->mensagem = $mensagem;
        $this->status = $status;
        $this->idUsuarioAlteracao = $idUsuarioAlteracao;
        $this->dataCadastro = $dataCadastro;
        $this->dataUltimaAlteracao = $dataUltimaAlteracao;
        $this->ativo = $ativo;
    }

    //PROPRIEDADES
    public function getIdMailling() {
        return $this->idMailling;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getEmailEmitente() {
        return $this->emailEmitente;
    }

    public function getEmailDestinatario() {
        return $this->emailDestinatario;
    }

    public function getAssunto() {
        return $this->assunto;
    }

    public function getDataEnvio() {
        return $this->dataEnvio;
    }

    public function getMensagem() {
        return $this->mensagem;
    }

    public function getStatus() {
        return $this->status;
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

    public function setIdMailling($idMailling) {
        $this->idMailling = $idMailling;
        return $this;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
        return $this;
    }

    public function setEmailEmitente($emailEmitente) {
        $this->emailEmitente = $emailEmitente;
        return $this;
    }

    public function setEmailDestinatario($emailDestinatario) {
        $this->emailDestinatario = $emailDestinatario;
        return $this;
    }

    public function setAssunto($assunto) {
        $this->assunto = $assunto;
        return $this;
    }

    public function setDataEnvio($dataEnvio) {
        $this->dataEnvio = $dataEnvio;
        return $this;
    }

    public function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
        return $this;
    }

    public function setStatus($status) {
        $this->status = $status;
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
}
