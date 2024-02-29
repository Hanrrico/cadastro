<?php
    if($_POST["cxnome"] != "")
    {
        include_once "factor/conexao.php";
        $nome = $_POST["cxnome"];
        $email = $_POST["cxemail"];
        $sql = "insert into tbcliente
        (nome,email)
        value
        ('$nome','$email')";
        $query = mysqli_query($conn,$sql);
        echo "Dados cadastrado com sucesso!";
    } else{
        echo "Dados não cadastrado";
    }
?>