<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
require_once '../controller/cPessoaJ.php';
$cadPessoaJ = new cPessoaJ();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Pessoa Jurídica</title>
    </head>
    <body>
        <h1>Cadastro de Pessoa Jurídica</h1> 
        <a href="../index.php">Voltar</a>
        <br><br>
        <form action="<?php $cadPessoaJ->inserir(); ?>" method="POST">
            <input type="text" required placeholder="Razão Social aqui..." name="social"> 
            <br>
            <input type="text" required placeholder="Nome Fantasia aqui..." name="fantasia"> 
            <br>
            <input type="email" required placeholder="Email aqui..." name="email"> 
            <br>
            <input type="text"  placeholder="Endereço aqui..." name="endereco"> 
            <br>
            <input type="tel" required placeholder="Telefone aqui..." name="telefone"> 
            <br>
            <input type="text"  placeholder="Site aqui..." name="site">
            <br>
            <input type="number"  placeholder="CNPJ aqui..." name="cnpj"> 
            <br><br>
            <input type="submit" value="Salvar" name="salvarPJ">
            <input type="reset" value="Limpar" name="limpar">
        </form>
        <br>
        <?php $cadPessoaJ->getAll(); ?>     
    </body>
</html>
