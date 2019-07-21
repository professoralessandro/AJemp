<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

/**
 * Description of Produto
 *
 * @author Alessandro dos Santos
 * Date: 06-07-2019
 */
class Produto
{
    //ATRIBUTOS
    private $idProduto;
    private $nomeProduto;
    private $precoProduto;
    private $codigoBarras;
    private $descricao;
    private $categoria;
    private $imagem;
    private $idUsuarioAlteracao;
    private $dataCadastro;
    private $dataUltimaAlteracao;
    private $ativo;
    
    //CONSTRUTOR
    function __construct($idProduto = "", $nomeProduto = "",$precoProduto = "", $codigoBarras = "", $descricao = "", $categoria = "", $imagem = "", $idUsuarioAlteracao = "", $dataCadastro = "", $dataUltimaAlteracao = "", $ativo = "") {
        $this->idProduto = $idProduto;
        $this->nomeProduto = $nomeProduto;
        $this->precoProduto = $precoProduto;
        $this->codigoBarras = $codigoBarras;
        $this->descricao = $descricao;
        $this->categoria = $categoria;
        $this->imagem = $imagem;
        $this->idUsuarioAlteracao = $idUsuarioAlteracao;
        $this->dataCadastro = $dataCadastro;
        $this->dataUltimaAlteracao = $dataUltimaAlteracao;
        $this->ativo = $ativo;
    }

    //PROPRIEDADES
    public function getIdProduto() {
        return $this->idProduto;
    }

    public function getNomeProduto() {
        return $this->nomeProduto;
    }

    public function getPrecoProduto() {
        return $this->precoProduto;
    }

    public function getCodigoBarras() {
        return $this->codigoBarras;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getCategoria() {
        return $this->categoria;
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

    public function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
        return $this;
    }

    public function setNomeProduto($nomeProduto) {
        $this->nomeProduto = $nomeProduto;
        return $this;
    }

    public function setPrecoProduto($precoProduto) {
        $this->precoProduto = $precoProduto;
        return $this;
    }

    public function setCodigoBarras($codigoBarras) {
        $this->codigoBarras = $codigoBarras;
        return $this;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
        return $this;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
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
}//CLASSES
