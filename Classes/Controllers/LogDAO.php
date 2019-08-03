<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

use \Conexao\Conexao;
use \Models\Log;

/**
 * Description of Log
 *
 * @author Alessandro dos Santos
 * Date: 21-07-2019
 */
class LogDAO {

    //ATRIBUTOS
    private $conexao;

    //CONSTRUTORES
    public function __construct(Conexao $conexao) {
        $this->conexao = $conexao;
    }

    //DAOMETODOS
    public function adicionarLog(Log $log) {
        $sqlComand = "CALL spAdicionarLog('";
        $sqlComand = $sqlComand .$log->getIdUsuario()."',";
        $sqlComand = $sqlComand .$log->getNomeProcedimento(). "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//ADICIONAR Log
    
    public function alterarLog(Log $log)
    {
        $sqlComand = "CALL spAlterarLog('";
        $sqlComand = $sqlComand .$log->getIdLog()."',";
        $sqlComand = $sqlComand .$log->getIdUsuario()."',";
        $sqlComand = $sqlComand .$log->getNomeProcedimento(). "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//ALTERAR Log
    
    public function excluirLog($idLog)
    {
        $sqlComand = "CALL spExcluirLog('";
        $sqlComand = $sqlComand .$idLog. "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR Log
    
    public function listarLogs()
    {
        $sqlComand = "CALL spListarLogs()";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR Log
    
    public function buscarLog($idLog)
    {
        $sqlComand = "CALL spBuscarLog('";
        $sqlComand = $sqlComand .$idLog. "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR Log

    //DAOMETODOS
}//CLASS
