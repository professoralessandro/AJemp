<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

use \Conexao\Conexao;
use \Models\Produto;

/**
 * Description of Produto
 *
 * @author Alessandro dos Santos
 * Date: 21-07-2019
 */
class ProdutoDAO {

    //ATRIBUTOS
    private $conexao;

    //CONSTRUTORES
    public function __construct(Conexao $conexao) {
        $this->conexao = $conexao;
    }

    //DAOMETODOS
    public function adicionarProduto(Produto $produto) {
        $sqlComand = "CALL spAdicionarProduto('";
        $sqlComand = $sqlComand .$produto->getIdUsuario()."',";
        $sqlComand = $sqlComand .$produto->getEmailEmitente()."',";
        $sqlComand = $sqlComand .$produto->getEmailDestinatario()."',";
        $sqlComand = $sqlComand .$produto->getAssunto()."',";
        $sqlComand = $sqlComand .$produto->getMensagem()."',";
        $sqlComand = $sqlComand .$produto->getIdUsuarioAlteracao(). "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//ADICIONAR Produto
    
    public function alterarProduto(Produto $produto)
    {
        $sqlComand = "CALL spAlterarProduto('";
        $sqlComand = $sqlComand .$produto->getEmailEmitente()."',";
        $sqlComand = $sqlComand .$produto->getAssunto()."',";
        $sqlComand = $sqlComand .$produto->getMensagem()."',";
        $sqlComand = $sqlComand .$produto->getIdUsuarioAlteracao(). "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//ALTERAR Produto
    
    public function excluirProduto($idProduto)
    {
        $sqlComand = "CALL spAlterarProduto('";
        $sqlComand = $sqlComand .$idProduto. "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR Produto
    
    public function listarProdutos()
    {
        $sqlComand = "CALL spListarProdutos()";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR Produto
    
    public function buscarProduto($idProduto)
    {
        $sqlComand = "CALL spBuscarProduto('";
        $sqlComand = $sqlComand .$idProduto. "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR Produto

    //DAOMETODOS
}//CLASS