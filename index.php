<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <?php

    function linkSite($dominio) {
        ?>
        <a href="http://www.<?php echo $dominio ?>.com.br" target="blank"> 
            <?php echo $dominio ?>
        </a>
        <?php
    }
    ?>

    <head>
        <meta charset="UTF-8">
        <title>INF4211 - Primeiro Projeto</title>
    </head>
    <body>
        <h1> Cadastro de Pessoas</h1>
        <h2> INF4M211 </h2>
        <table><!<!-- Cria tabela -->
            <tr><!<!-- Cria linha -->
                <td><!<!-- Cria coluna -->
                    <a href="view/cadPessoaF.php">Ger. Pessoa Física</a>
                </td>
                <td>
                    <a href="view/cadPessoaJ.php">Ger. Pessoa Jurídica</a>
                </td>   
            </tr>
        </table> 
    </body>
</html> <!<!-- Fecha a pág -->
