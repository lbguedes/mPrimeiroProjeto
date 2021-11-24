<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php $listPes = $_REQUEST['pessoasJ']; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
</head>
    <body>
         <table>
            <tr> 
                <th>Nome</th>               
            <th>Telefone</th>
            <th>Site</th> 
            <?php foreach($listPes as $pj): ?></td> 
        <tr>
            <td><?php echo $pj->getNome();?></td>
            <td><?php echo $pj->getTelefone();?></td>
            <td><?php echo $pj->getSite();?></td>
        </tr>
        <?php endforeach;?>
        </table>
        <?php
        // put your code here
        ?>
    </body>
</html>