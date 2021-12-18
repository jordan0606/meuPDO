<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once '../controller/cPessoaJ.php';//require_onde == import do java
$listPes = $_REQUEST['pessoasJ'];//lista do array, não estamos mais usando
$listPesBD = $_REQUEST['pessoaPJBD']; //lista do BD
$cadPJs = new cPessoaJ();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <th>Nome Fantasia</th>
                <th>Site</th>
                <th>CNPJ</th>
            </tr>
            <!--
            <?php foreach ($listPes as $pj): ?>
            <tr>
                <td><?php //echo $pj->getNomeFantasia(); ?></td>
                <td><?php //echo $pj->getSite(); ?></td>
                <td><?php //echo $pj->getCnpj(); ?></td>
            </tr>
            <?php endforeach; ?>
            -->
            <!-- Lista com dados recuperados do Banco de dados -->
        <?php
            if ($listPesBD == null) {
                echo "Tabela Pessoa Juridica esta vazia!";
            } else {
                foreach ($listPesBD as $pj):
                    ?>
                    <tr>
                        <td><?php echo $pj['nomeFantasia']; ?></td>
                        <td><?php echo $pj['site']; ?></td>
                        <td><?php echo $pj['cnpj']; ?></td>
                        <td>
                            <form action="editPessoaJ.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $pj['idPessoa']; ?>"/>
                                <input type="submit" name="updatePJ" value="Editar"/>
                            </form>
                            <form action="<?php $cadPJs->deletePes(); ?>" method="POST">
                                <input type="hidden" name="id" value="<?php echo $pj['idPessoa']; ?>"/>
                                <input type="submit" name="delete" value="Deletar"/>
                            </form>
                        </td>
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
