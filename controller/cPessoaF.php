<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of cPessoaF
 * Controller da Pessoa Física
 * @author User
 */
require_once '../model/pessoaF.php';

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
        $this->getAllBD();
        require_once '../view/listaPessoaF.php';
    }

    public function imprimePFs() {
        foreach ($this->pfs as $pes) {
            echo $pes;
        }
    }

    public function inserir() {
        if (isset($_POST['salvarPF'])) {
            $pf = new pessoaF();
            $pf->setNome($_POST['nome']);
            $pf->setEmail($_POST['email']);
            $pf->setEndereco($_POST['endereco']);
            $pf->setTelefone($_POST['telefone']);
            $pf->setCpf($_POST['cpf']);
            $pf->setRg($_POST['rg']);
            $pf->setSexo($_POST['sexo']);
            $this->addPessoaF($pf);
        }
    }

    public function inserirBD() {
        if (isset($_POST['salvarPF'])) {
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $schema = 'infom4211';
            $conexao = mysqli_connect($host, $user, $pass, $schema);
            if (!$conexao) {
                die('Não foi possível conectar. ' . mysqli_error());
            }
            $Nome = $_POST['nome'];
            $Email = $_POST['email'];
            $Endereco = $_POST['endereco'];
            $Telefone = $_POST['telefone'];
            $Cpf = $_POST['cpf'];
            $Rg = $_POST['rg'];
            $Sexo = $_POST['sexo'];
            $sql = "Insert into pessoa(`nome`, `telefone`, `email`, `endereco`,"
                    . "`cpf`,`rg`, `sexo`) values ('$Nome', '$Telefone', '$Email', " .
                    "'$Endereco', '$Cpf', '$Rg', '$Sexo')";
            //mysqli_select_db($conexao, $schema);
            $resultado = mysqli_query($conexao, $sql);
            if (!$resultado) {

                die('Não foi possível inserir na tabela.' . mysqli_error($conexao));
            }
            mysqli_close($conexao);
        }
    }

    public function getAllBD() {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $schema = 'infom4211';
        $conexao = mysqli_connect($host, $user, $pass, $schema);
        if (!$conexao) {
            die('Não foi possivel conectar. ' . mysqli_error());
        }

        $sql = "select * from pessoa where cnpj is null";
        $result = mysqli_query($conexao, $sql);
        if ($result) {
            $pfsBD = [];
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($pfsBD, $row);
            }
            $_REQUEST['pessoaPFBD'] = $pfsBD;
        }else{
            $_REQUEST['pessoaPFBD'] = 0;
        }
        mysqli_close($conexao);
    
        }
        
        public function deletePes(){
            if(isset($_POST['delete'])){
                $id = $_POST['id'];
                
                 if (isset($_POST['salvarPF'])) {
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $schema = 'infom4211';
            $conexao = mysqli_connect($host, $user, $pass, $schema);
            if (!$conexao) {
                die('Não foi possível conectar. ' . mysqli_error());
            }
            
            $sql = "delete from pessoa where idPessoa = $id";
            $result = mysqli_querry($conexao, $sql);
            if(!$result){
                die('Erro ao deletar. ' . mysqli_error($conexao));
            }
            mysqli_close($conexao);
            header('Refresh: 0'); //recarrega a página em 0 segundos.
            
            }
        }
    }
}


