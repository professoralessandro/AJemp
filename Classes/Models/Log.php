<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

/**
 * Description of Usuario
 *
 * @author Alessandro dos Santos
 * Date: 06-07-2019
 */
class Log {

    //ATRIBUTOS
    private $idLog;
    private $idUsuario;
    private $nomeProcedimento;
    private $dataCadastro;

    //CONSTRUTOR
    function __construct($idLog = "", $idUsuario = "", $nomeProcedimento = "", $dataCadastro = "") {
        $this->idLog = $idLog;
        $this->idUsuario = $idUsuario;
        $this->nomeProcedimento = $nomeProcedimento;
        $this->dataCadastro = $dataCadastro;
    }

    //PROPRIEDADES
    public function getIdLog() {
        return $this->idLog;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getNomeProcedimento() {
        return $this->nomeProcedimento;
    }

    public function getDataCadastro() {
        return $this->dataCadastro;
    }

    public function setIdLog($idLog) {
        $this->idLog = $idLog;
        return $this;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
        return $this;
    }

    public function setNomeProcedimento($nomeProcedimento) {
        $this->nomeProcedimento = $nomeProcedimento;
        return $this;
    }

    public function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
        return $this;
    }

        //PROPRIEDADES
}//CLASS
