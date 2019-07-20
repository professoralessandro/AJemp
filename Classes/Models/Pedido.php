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
class Pedido
{
    //ATRIBUTOS
    private $idpedido;
    private $idCliente;
    private $tipoPagamento;
    private $estaPago;
    private $ativo;
    
    //CONSTRUTORES
    function __construct($idpedido = "", $idCliente = "", $tipoPagamento = "", $estaPago = "", $ativo = "")
    {
        $this->idpedido = $idpedido;
        $this->idCliente = $idCliente;
        $this->tipoPagamento = $tipoPagamento;
        $this->estaPago = $estaPago;
        $this->ativo = $ativo;
    }

    //PROPRIEDADES
    public function getIdpedido()
    {
        return $this->idpedido;
    }

    public function getIdCliente()
    {
        return $this->idCliente;
    }

    public function getTipoPagamento()
    {
        return $this->tipoPagamento;
    }

    public function getEstaPago()
    {
        return $this->estaPago;
    }

    public function getAtivo()
    {
        return $this->ativo;
    }

    public function setIdpedido($idpedido)
    {
        $this->idpedido = $idpedido;
        return $this;
    }

    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
        return $this;
    }

    public function setTipoPagamento($tipoPagamento)
    {
        $this->tipoPagamento = $tipoPagamento;
        return $this;
    }

    public function setEstaPago($estaPago)
    {
        $this->estaPago = $estaPago;
        return $this;
    }

    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
        return $this;
    }
    //PROPRIEDADES
}//CLASSE
