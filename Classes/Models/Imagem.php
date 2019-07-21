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
class Imagem {

    //ATRIBUTOS
    private $idImagem;
    private $idProduto;
    private $tituloImagem;
    private $caminhoImagem;
    private $DescricaoImagem;
    private $idUsuarioAlteracao;
    private $dataCadastro;
    private $dataUltimaAlteracao;
    private $ativo;

    //CONSTRUTOR
    function __construct($idImagem = "", $idProduto = "", $tituloImagem = "", $caminhoImagem = "", $DescricaoImagem = "", $idUsuarioAlteracao = "", $dataCadastro = "", $dataUltimaAlteracao = "", $ativo = "") {
        $this->idImagem = $idImagem;
        $this->idProduto = $idProduto;
        $this->tituloImagem = $tituloImagem;
        $this->caminhoImagem = $caminhoImagem;
        $this->DescricaoImagem = $DescricaoImagem;
        $this->idUsuarioAlteracao = $idUsuarioAlteracao;
        $this->dataCadastro = $dataCadastro;
        $this->dataUltimaAlteracao = $dataUltimaAlteracao;
        $this->ativo = $ativo;
    }

    //PROPRIEDADES
    public function getIdImagem() {
        return $this->idImagem;
    }

    public function getIdProduto() {
        return $this->idProduto;
    }

    public function getTituloImagem() {
        return $this->tituloImagem;
    }

    public function getCaminhoImagem() {
        return $this->caminhoImagem;
    }

    public function getDescricaoImagem() {
        return $this->DescricaoImagem;
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

    public function setIdImagem($idImagem) {
        $this->idImagem = $idImagem;
        return $this;
    }

    public function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
        return $this;
    }

    public function setTituloImagem($tituloImagem) {
        $this->tituloImagem = $tituloImagem;
        return $this;
    }

    public function setCaminhoImagem($caminhoImagem) {
        $this->caminhoImagem = $caminhoImagem;
        return $this;
    }

    public function setDescricaoImagem($DescricaoImagem) {
        $this->DescricaoImagem = $DescricaoImagem;
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
