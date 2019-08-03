<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

/**
 * Description of Pedido
 *
 * @author Alessandro dos Santos
 * Date: 06-07-2019
 */
class Pedido {

    //ATRIBUTOS
    private $idPedido;
    private $idUsuario;
    private $idProduto;
    private $tipoPagamento;
    private $estaPago;
    private $idUsuarioAlteracao;
    private $dataCadastro;
    private $dataUltimaAlteracao;
    private $ativo;

    //CONSTRUTORES
    function __construct($idPedido ="", $idUsuario ="", $idProduto ="", $tipoPagamento ="", $estaPago ="", $idUsuarioAlteracao ="", $dataCadastro ="", $dataUltimaAlteracao ="", $ativo ="") {
        $this->idPedido = $idPedido;
        $this->idUsuario = $idUsuario;
        $this->idProduto = $idProduto;
        $this->tipoPagamento = $tipoPagamento;
        $this->estaPago = $estaPago;
        $this->idUsuarioAlteracao = $idUsuarioAlteracao;
        $this->dataCadastro = $dataCadastro;
        $this->dataUltimaAlteracao = $dataUltimaAlteracao;
        $this->ativo = $ativo;
    }
    //PROPRIEDADES
    public function getIdPedido() {
        return $this->idPedido;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getIdProduto() {
        return $this->idProduto;
    }

    public function getTipoPagamento() {
        return $this->tipoPagamento;
    }

    public function getEstaPago() {
        return $this->estaPago;
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

    public function setIdPedido($idPedido) {
        $this->idPedido = $idPedido;
        return $this;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
        return $this;
    }

    public function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
        return $this;
    }

    public function setTipoPagamento($tipoPagamento) {
        $this->tipoPagamento = $tipoPagamento;
        return $this;
    }

    public function setEstaPago($estaPago) {
        $this->estaPago = $estaPago;
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
}//CLASSE
