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
    private $quantidadeVendas;
    
    //CONSTRUTOR
    function __construct($idProduto = "", $nomeProduto = "", $precoProduto = "", $codigoBarras = "", $descricao = "", $quantidadeVendas = "")
    {
        $this->idProduto = $idProduto;
        $this->nomeProduto = $nomeProduto;
        $this->precoProduto = $precoProduto;
        $this->codigoBarras = $codigoBarras;
        $this->descricao = $descricao;
        $this->quantidadeVendas = $quantidadeVendas;
    }
    
    //PROPRIEDADES
    public function getIdProduto()
    {
        return $this->idProduto;
    }

    public function getNomeProduto()
    {
        return $this->nomeProduto;
    }

    public function getPrecoProduto()
    {
        return $this->precoProduto;
    }

    public function getCodigoBarras()
    {
        return $this->codigoBarras;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getQuantidadeVendas() {
        return $this->quantidadeVendas;
    }

    public function setIdProduto($idProduto)
    {
        $this->idProduto = $idProduto;
        return $this;
    }

    public function setNomeProduto($nomeProduto)
    {
        $this->nomeProduto = $nomeProduto;
        return $this;
    }

    public function setPrecoProduto($precoProduto)
    {
        $this->precoProduto = $precoProduto;
        return $this;
    }

    public function setCodigoBarras($codigoBarras)
    {
        $this->codigoBarras = $codigoBarras;
        return $this;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
        return $this;
    }

    public function setQuantidadeVendas($quantidadeVendas)
    {
        $this->quantidadeVendas = $quantidadeVendas;
        return $this;
    }
    //PROPRIEDADES
}//CLASSES
