<?php
require("conexaobd.php");
if(isset($_POST)){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nascimento = $_POST['nascimento'];
    $genero = $_POST['genero'];
    $texto = $_POST['texto'];

    $query = "INSERT INTO usuarios (nome, email, senha, nascimento, genero, texto) 
                VALUES (:nome, :email, :senha, :nascimento, :genero, :texto)";
    
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        ':nome' => $nome,
        ':email' => $email,
        ':senha' => $senha,
        ':nascimento' => $nascimento,
        ':genero' => $genero,
        ':texto' => $texto
    ]);

    header("Location: sucessobd.php?criado=sucesso");
}