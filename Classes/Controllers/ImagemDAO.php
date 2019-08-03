<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

use \Conexao\Conexao;
use \Models\Imagem;

/**
 * Description of Imagem
 *
 * @author Alessandro dos Santos
 * Date: 21-07-2019
 */
class ImagemDAO {

    //ATRIBUTOS
    private $conexao;

    //CONSTRUTORES
    public function __construct(Conexao $conexao) {
        $this->conexao = $conexao;
    }

    //DAOMETODOS
    public function adicionarImagem(Imagem $imagem) {
        $sqlComand = "CALL spAdicionarImagem('";
        $sqlComand = $sqlComand .$imagem->getIdProduto()."',";
        $sqlComand = $sqlComand .$imagem->getTituloImagem()."',";
        $sqlComand = $sqlComand .$imagem->getCaminhoImagem()."',";
        $sqlComand = $sqlComand .$imagem->getDescricaoImagem()."',";
        $sqlComand = $sqlComand .$imagem->getIdUsuarioAlteracao(). "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//ADICIONAR Imagem
    
    public function alterarImagem(Imagem $imagem)
    {
        $sqlComand = "CALL spAlterarImagem('";
        $sqlComand = $sqlComand .$imagem->getIdImagem()."',";
        $sqlComand = $sqlComand .$imagem->getIdProduto()."',";
        $sqlComand = $sqlComand .$imagem->getTituloImagem()."',";
        $sqlComand = $sqlComand .$imagem->getCaminhoImagem()."',";
        $sqlComand = $sqlComand .$imagem->getDescricaoImagem()."',";
        $sqlComand = $sqlComand .$imagem->getIdUsuarioAlteracao(). "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//ALTERAR Imagem
    
    public function excluirImagem($idImagem)
    {
        $sqlComand = "CALL spExcluirImagem('";
        $sqlComand = $sqlComand .$idImagem. "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR Imagem
    
    public function listarImagems()
    {
        $sqlComand = "CALL spListarImagems()";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR Imagem
    
    public function buscarImagem($idImagem)
    {
        $sqlComand = "CALL spBuscarImagem('";
        $sqlComand = $sqlComand .$idImagem. "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }//EXCLUIR Imagem

    //DAOMETODOS
}//CLASS
