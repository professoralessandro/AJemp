<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

use \Conexao\Conexao;
use \Models\Mailling;

/**
 * Description of Mailling
 *
 * @author Alessandro dos Santos
 * Date: 21-07-2019
 */
class MaillingDAO {

    //ATRIBUTOS
    private $conexao;

    //CONSTRUTORES
    public function __construct(Conexao $conexao) {
        $this->conexao = $conexao;
    }

    //DAOMETODOS
    public function adicionarMailling(Mailling $mailling) {
        $sqlComand = "CALL spAdicionarMailling('";
        $sqlComand = $sqlComand .$mailling->getIdUsuario()."','";
        $sqlComand = $sqlComand .$mailling->getEmailEmitente()."','";
        $sqlComand = $sqlComand .$mailling->getEmailDestinatario()."','";
        $sqlComand = $sqlComand .$mailling->getAssunto()."','";
        $sqlComand = $sqlComand .$mailling->getMensagem()."','";
        $sqlComand = $sqlComand .$mailling->getIdUsuarioAlteracao(). "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//ADICIONAR MAILLING
    
    public function alterarMailling(Mailling $mailling)
    {
        $sqlComand = "CALL spAlterarMailling('";
        $sqlComand = $sqlComand .$mailling->getMensagem()."','";
        $sqlComand = $sqlComand .$mailling->getIdUsuario()."','";
        $sqlComand = $sqlComand .$mailling->getEmailEmitente()."','";
        $sqlComand = $sqlComand .$mailling->getEmailDestinatario()."','";
        $sqlComand = $sqlComand .$mailling->getAssunto()."','";
        $sqlComand = $sqlComand .$mailling->getMensagem()."','";
        $sqlComand = $sqlComand .$mailling->getStatus()."','";
        $sqlComand = $sqlComand .$mailling->getIdUsuarioAlteracao(). "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//ALTERAR MAILLING
    
    public function excluirMailling($idMailling)
    {
        $sqlComand = "CALL spExcluirMailling('";
        $sqlComand = $sqlComand .$idMailling. "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR MAILLING
    
    public function listarMaillings()
    {
        $sqlComand = "CALL spListarMaillings()";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR MAILLING
    
    public function buscarMailling($idMailling)
    {
        $sqlComand = "CALL spBuscarMailling('";
        $sqlComand = $sqlComand .$idMailling. "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR MAILLING

    //DAOMETODOS
}//CLASS
