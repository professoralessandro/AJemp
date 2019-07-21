<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

use \Conexao\Conexao;
use \Models\Loja;

/**
 * Description of Loja
 *
 * @author Alessandro dos Santos
 * Date: 21-07-2019
 */
class LojaDAO {

    //ATRIBUTOS
    private $conexao;

    //CONSTRUTORES
    public function __construct(Conexao $conexao) {
        $this->conexao = $conexao;
    }

    //DAOMETODOS
    public function adicionarLoja(Loja $loja) {
        $sqlComand = "CALL spAdicionarLoja('";
        $sqlComand = $sqlComand .$loja->getIdLoja()."',";
        $sqlComand = $sqlComand .$loja->getEmailEmitente()."',";
        $sqlComand = $sqlComand .$loja->getEmailDestinatario()."',";
        $sqlComand = $sqlComand .$loja->getAssunto()."',";
        $sqlComand = $sqlComand .$loja->getMensagem()."',";
        $sqlComand = $sqlComand .$loja->getIdLojaAlteracao(). "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//ADICIONAR Loja
    
    public function alterarLoja(Loja $loja)
    {
        $sqlComand = "CALL spAlterarLoja('";
        $sqlComand = $sqlComand .$loja->getEmailEmitente()."',";
        $sqlComand = $sqlComand .$loja->getAssunto()."',";
        $sqlComand = $sqlComand .$loja->getMensagem()."',";
        $sqlComand = $sqlComand .$loja->getIdLojaAlteracao(). "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//ALTERAR Loja
    
    public function excluirLoja($idLoja)
    {
        $sqlComand = "CALL spAlterarLoja('";
        $sqlComand = $sqlComand .$idLoja. "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR Loja
    
    public function listarLojas()
    {
        $sqlComand = "CALL spListarLojas()";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR Loja
    
    public function buscarLoja($idLoja)
    {
        $sqlComand = "CALL spBuscarLoja('";
        $sqlComand = $sqlComand .$idLoja. "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR Loja

    //DAOMETODOS
}//CLASS
