<?php

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $pontodacarne = $_POST['pontodacarne'];
    $pao = $_POST['pao'];
    $queijo = $_POST['queijo'];
    $observacoes = $_POST['observacoes'];
    
    $con = mysqli_connect('localhost', 'root', '', 'huckBurger');

    $sql = "INSERT INTO pedidos VALUES(null, '{$nome}', '{$telefone}', '{$pontodacarne}', '{$pao}', '{$queijo}', '{$observacoes}')";

    $msg = (mysqli_query($con, $sql)) ? "0" : "1";
    
    if($msg == '1'){

        echo "<script>alert('Erro ao gravar')</script>";

    }else{

        echo "<script>alert('Sucesso ao Gravar')</script>";

    }
header('lcoation:index.php');
?>
