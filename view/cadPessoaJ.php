<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
require_once '../controller/cPessoaJ.php';
$cadPessoaJ = new cPessoaJ();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Pessoa Juridica</title>
    </head>
    <body>
        <h1>Cadastro de Pessoa Juridica</h1>
        <h2>CRUD</h2>
        <a href="../index.php">Voltar</a>
        <br><br>
        <form action="<?php $cadPessoaJ->inserirBD(); ?>" method="POST">
            <input type="text" required placeholder="Razão Social aqui..." name="nome">
            <br><br>
            <input type="text" required placeholder="Nome Fantasia aqui..." name="nomeFantasia">
            <br><br>
            <input type="tel" required placeholder="Telefone aqui..." minlength="10" maxlength="10" 
                   name="telefone">
            <br><br>
            <input type="email" required placeholder="Email aqui..." name="email">
            <br><br>
            <input type="text" placeholder="Endereço aqui..." name="endereco">
            <br><br>
            <input type="text" placeholder="CNPJ aqui..." minlength="14" maxlength="14" name="cnpj"
                   name="cnpj" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
            <br><br>
            <input type="text" placeholder="Site aqui..." name="site">
            <br><br>
            <input type="submit" value="Salvar" name="salvarPJ">
            <input type="reset" value="Limpar" name="limpar">
        </form>
        <br>
        <?php $cadPessoaJ->getAll(); ?>
        
    </body>
</html>
