 <!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
require_once '../controller/cPessoaF.php';
$cadPessoaF = new cPessoaF();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Pessoa Física</title>
    </head>
    <body>
        <h1>Cadastro de Pessoa Física</h1> 
        <a href="../index.php">Voltar</a>
        <form action="<?php $cadPessoaF->inserirBD(); ?>" method="POST">
            <input type="text" required placeholder="Nome aqui..." name="nome"> 
            <br>
            <input type="tel" required placeholder="Telefone aqui..." name="telefone"> 
            <br>
            <input type="email" required placeholder="Email aqui..." name="email"> 
            <br>
            <input type="text"  placeholder="Endereço aqui..." name="endereco"> 
            <br>
            <input type="number" required placeholder="CPF aqui..." name="cpf"> 
            <br>
            <input type="text"  placeholder="RG aqui..." name="rg"> 
            <br>
            <input type="radio" value="F" name="sexo">Feminino 
            <input type="radio" value="M" name="sexo">Masculino 
            <input type="submit" value="Salvar" name="salvarPF">
            <input type="reset" value="Limpar" name="limpar">
        </form>
        <br>  
        <?php $cadPessoaF->getAll(); ?>     

    </body>
</html>
