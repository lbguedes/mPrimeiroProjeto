<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of pessoaJ
 * Classe da Pessoa Jurídica
 * @author User
 */
require_once 'pessoa.php';
class pessoaJ extends pessoa{
    //put your code here
    
    private $cnpj;
    private $nomeFantasia;
    private $site;
    
    public function pessoaJ(){
        
    }
    
    public function getCnpj() {
        return $this->cnpj;
    }

    public function getNomeFantasia() {
        return $this->nomeFantasia;
    }

    public function getSite() {
        return $this->site;
    }

    public function setCnpj($cnpj): void {
        $this->cnpj = $cnpj;
    }

    public function setNomeFantasia($nomeFantasia): void {
        $this->nomeFantasia = $nomeFantasia;
    }

    public function setSite($site): void {
        $this->site = $site;
    }

    public function __toString() {
        $pes = "Pessoa Jurídica: " . "<br>"
                . " - Razão Social: " . $this->getNome() . "<br>"
                . " - Nome Fantasia: " . $this->getNomeFantasia() . "<br>"
                . " - Telefone: " . $this->getTelefone() . "<br>"
                . " - email: " . $this->getEmail() . "<br>"
                . " - Endereço: " . $this->getEndereco() . "<br>"
                . " - CNPJ: " . $this->getCnpj() . "<br>"
                . " - Site: " . $this->getSite() . "<br><br>";
        return $pes;
    }

    public function validaDoc($doc) {
        echo "Validando CNPJ: " . $doc;
    }

}
