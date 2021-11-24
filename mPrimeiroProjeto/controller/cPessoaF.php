<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cPessoaF
 * Controller da Pessoa Fisíca
 * @author jairb
 */
require_once './model/pessoaF.php';

class cPessoaF {

    //put your code here

    private $pfs = []; //Array de pessoas

    public function __construct() {
        $this->mokPFs();
    }

    /**
     * Este método insere novos objetos pessoaF no Array $pfs
     * @param type $p
     */
    public function addPessoaF($p) {
        array_push($this->pfs, $p);
    }

    public function mokPFs() {
        $pf1 = new pessoaF();
        $pf1->setNome('Fulano de Tal');
        $pf1->setTelefone('51999889988');
        $pf1->setEmail('fulano@bol.com.br');
        $pf1->setEndereco('Rua das Oliveiras');
        $pf1->setCpf('123123123321');
        $pf1->setRg('12345678912');
        $pf1->setSexo('M');
        $this->addPessoaF($pf1);

        $pf2 = new pessoaF();
        $pf2->setNome('Ciclana de Tal');
        $pf2->setTelefone('51988998899');
        $pf2->setEmail('ciclana@uol.com.br');
        $pf2->setEndereco('Av. dos Estados');
        $pf2->setCpf('321321321123');
        $pf2->setRg('98765432112');
        $pf2->setSexo('F');
        $this->addPessoaF($pf2);
    }

    public function getAll() {
        $_REQUEST['pessoasF'] = $this->pfs;
        require_once './view/listaPessoaF.php';
    }

    public function imprimePFs() {
        foreach ($this->pfs as $pes) {
            echo $pes;
        }
    }

}
