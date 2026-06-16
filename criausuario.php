<?php
require("conexaobd.php");
if(isset($_POST)){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nascimento = $_POST['nascimento'];
    $genero = $_POST['genero'];

    $sql = "INSERT INTO usuarios (nome, email, senha, nascimento, genero) VALUES (:nome, :email, :senha, :nascimento, :genero)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':nascimento', $nascimento);
    $stmt->bindParam(':genero', $genero);

    if($stmt->execute()){
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário.";
    }
}