<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cPessoaJ
 *
 * @author jairb
 */
class cPessoaJ {
    //put your code here
    
     private $pj = []; //Array de pessoas

    public function __construct() {
        $this->mokPj();
    }

            /**
     * Este método insere novos objetos pessoaF no Array $pfs
     * @param type $p
     */
    public function addPessoaJ($p) {
        array_push($this->pj, $p);
    }
    
    public function mokPj() {
        $pj1 = new pessoaJ();
        $pj1->setNome('Fulano de Tal');
        $pj1->setTelefone('51999889988');
        $pj1->setEmail('fulano@bol.com.br');
        $pj1->setEndereco('Rua das Oliveiras');
        $pj1->setCpf('123123123321');
        $pj1->setRg('12345678912');
        $pj1->setSexo('M');
        $this->addPessoaJ($pj1);
        
        $pj2 = new pessoaF();
        $pj2->setNome('Ciclana de Tal');
        $pj2->setTelefone('51988998899');
        $pj2->setEmail('ciclana@uol.com.br');
        $pj2->setEndereco('Av. dos Estados');
        $pj2->setCpf('321321321123');
        $pj2->setRg('98765432112');
        $pj2->setSexo('F');
        $this->addPessoaJ($pj2);
    }
    
    public function getAll() {
        return $this->pj;
    }
    
    public function imprimePj() {
        foreach ($this->pj as $pes) {
            echo $pes;
        }
    }

}

