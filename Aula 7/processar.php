<?php
 include 'conectar.php';

 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $mensagem = $_POST['mensagem'];

 // Inserir ao banco
 $sql = "INSERT INTO contatos (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

 if ($conexao->query($sql) === TRUE) {
    echo "Mensagem enviadada com sucesso!";
 } else {
    echo "Erro." . $conexao->error;
 }

 $conexao->close();
?>