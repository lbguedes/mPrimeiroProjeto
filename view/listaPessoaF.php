<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
require_once '../controller/cPessoaF.php';
$listPes = $_REQUEST['pessoasF'];//lista do array, não estamos mais usando
$listPesBD = $_REQUEST['pessoaPFBD'];//lista do banco de dados
$cadPFS = new cPessoaF();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <th>Nome</th>
                <th>e-mail</th>
                <th>CPF</th>
                <th>Funções</th>
            </tr>
            <!--
            <?php foreach ($listPes as $pf): ?>
                <tr>
                    <td><?php //echo $pf->getNome();   ?></td>
                    <td><?php //echo $pf->getEmail();   ?></td>
                    <td><?php //echo $pf->getCpf();   ?></td>
                </tr>
            <?php endforeach; ?>
            -->
            <!-- Lista com dados recuperados do Banco de dados -->
            <?php
            if ($listPesBD == null) {
                echo "Tabela Pessoa Fisíca esta vazia!";
            } else {
                foreach ($listPesBD as $pf):
                    ?>
                    <tr>
                        <td><?php echo $pf['nome']; ?></td>
                        <td><?php echo $pf['email']; ?></td>
                        <td><?php echo $pf['cpf']; ?></td>
                    </tr>
                    <?php
                endforeach;
            }
            ?>
        </table>
        <?php
        // put your code here
        ?>
    </body>
</html>