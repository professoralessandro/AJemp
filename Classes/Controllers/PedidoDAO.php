<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

use \Conexao\Conexao;
use \Models\Pedido;

/**
 * Description of Pedido
 *
 * @author Alessandro dos Santos
 * Date: 21-07-2019
 */
class PedidoDAO {

    //ATRIBUTOS
    private $conexao;

    //CONSTRUTORES
    public function __construct(Conexao $conexao) {
        $this->conexao = $conexao;
    }

    //DAOMETODOS
    public function adicionarPedido(Pedido $pedido) {
        $sqlComand = "CALL spAdicionarPedido('";
        $sqlComand = $sqlComand .$pedido->getIdUsuario()."','";
        $sqlComand = $sqlComand .$pedido->getIdProduto()."','";
        $sqlComand = $sqlComand .$pedido->getTipoPagamento()."','";
        $sqlComand = $sqlComand .$pedido->getEstaPago()."','";
        $sqlComand = $sqlComand .$pedido->getIdUsuarioAlteracao(). "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//ADICIONAR PEDIDO
    
    public function alterarPedido(Pedido $pedido)
    {
        $sqlComand = "CALL spAlterarPedido('";
        $sqlComand = $sqlComand .$pedido->getIdPedido()."','";
        $sqlComand = $sqlComand .$pedido->getIdUsuario()."','";
        $sqlComand = $sqlComand .$pedido->getIdProduto()."','";
        $sqlComand = $sqlComand .$pedido->getTipoPagamento()."','";
        $sqlComand = $sqlComand .$pedido->getEstaPago()."','";
        $sqlComand = $sqlComand .$pedido->getIdUsuarioAlteracao(). "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//ALTERAR PEDIDO
    
    public function excluirPedido($idPedido)
    {
        $sqlComand = "CALL spExcluirPedido('";
        $sqlComand = $sqlComand .$idPedido. "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR PEDIDO
    
    public function listarPedidos()
    {
        $sqlComand = "CALL spListarPedidos()";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR PEDIDO
    
    public function buscarPedido($idPedido)
    {
        $sqlComand = "CALL spBuscarPedido('";
        $sqlComand = $sqlComand .$idPedido. "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR PEDIDO

    //DAOMETODOS
}//CLASS
