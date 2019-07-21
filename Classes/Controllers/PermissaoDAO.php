<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

use \Conexao\Conexao;
use \Models\Permissao;

/**
 * Description of Permissao
 *
 * @author Alessandro dos Santos
 * Date: 21-07-2019
 */
class PermissaoDAO {

    //ATRIBUTOS
    private $conexao;

    //CONSTRUTORES
    public function __construct(Conexao $conexao) {
        $this->conexao = $conexao;
    }

    //DAOMETODOS
    public function adicionarPermissao(Permissao $permissao) {
        $sqlComand = "CALL spAdicionarPermissao('";
        $sqlComand = $sqlComand .$permissao->getIdUsuario()."',";
        $sqlComand = $sqlComand .$permissao->getEmailEmitente()."',";
        $sqlComand = $sqlComand .$permissao->getEmailDestinatario()."',";
        $sqlComand = $sqlComand .$permissao->getAssunto()."',";
        $sqlComand = $sqlComand .$permissao->getMensagem()."',";
        $sqlComand = $sqlComand .$permissao->getIdUsuarioAlteracao(). "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//ADICIONAR Permissao
    
    public function alterarPermissao(Permissao $permissao)
    {
        $sqlComand = "CALL spAlterarPermissao('";
        $sqlComand = $sqlComand .$permissao->getEmailEmitente()."',";
        $sqlComand = $sqlComand .$permissao->getAssunto()."',";
        $sqlComand = $sqlComand .$permissao->getMensagem()."',";
        $sqlComand = $sqlComand .$permissao->getIdUsuarioAlteracao(). "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//ALTERAR Permissao
    
    public function excluirPermissao($idPermissao)
    {
        $sqlComand = "CALL spAlterarPermissao('";
        $sqlComand = $sqlComand .$idPermissao. "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR Permissao
    
    public function listarPermissaos()
    {
        $sqlComand = "CALL spListarPermissaos()";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR Permissao
    
    public function buscarPermissao($idPermissao)
    {
        $sqlComand = "CALL spBuscarPermissao('";
        $sqlComand = $sqlComand .$idPermissao. "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR Permissao

    //DAOMETODOS
}//CLASS
