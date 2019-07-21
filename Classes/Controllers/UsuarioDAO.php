<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

use \Conexao\Conexao;
use \Models\Usuario;

/**
 * Description of Usuario
 *
 * @author Alessandro dos Santos
 * Date: 21-07-2019
 */
class UsuarioDAO {

    //ATRIBUTOS
    private $conexao;

    //CONSTRUTORES
    public function __construct(Conexao $conexao) {
        $this->conexao = $conexao;
    }

    //DAOMETODOS
    public function adicionarUsuario(Usuario $usuario) {
        $sqlComand = "CALL spAdicionarUsuario('";
        $sqlComand = $sqlComand .$usuario->getIdUsuario()."',";
        $sqlComand = $sqlComand .$usuario->getEmailEmitente()."',";
        $sqlComand = $sqlComand .$usuario->getEmailDestinatario()."',";
        $sqlComand = $sqlComand .$usuario->getAssunto()."',";
        $sqlComand = $sqlComand .$usuario->getMensagem()."',";
        $sqlComand = $sqlComand .$usuario->getIdUsuarioAlteracao(). "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//ADICIONAR Usuario
    
    public function alterarUsuario(Usuario $usuario)
    {
        $sqlComand = "CALL spAlterarUsuario('";
        $sqlComand = $sqlComand .$usuario->getEmailEmitente()."',";
        $sqlComand = $sqlComand .$usuario->getAssunto()."',";
        $sqlComand = $sqlComand .$usuario->getMensagem()."',";
        $sqlComand = $sqlComand .$usuario->getIdUsuarioAlteracao(). "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//ALTERAR Usuario
    
    public function excluirUsuario($idUsuario)
    {
        $sqlComand = "CALL spAlterarUsuario('";
        $sqlComand = $sqlComand .$idUsuario. "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR Usuario
    
    public function listarUsuarios()
    {
        $sqlComand = "CALL spListarUsuarios()";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR Usuario
    
    public function buscarUsuario($idUsuario)
    {
        $sqlComand = "CALL spBuscarUsuario('";
        $sqlComand = $sqlComand .$idUsuario. "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR Usuario

    //DAOMETODOS
}//CLASS
