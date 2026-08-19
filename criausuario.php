<?php
require("conexaobd.php");

if (isset($_POST)) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nascimento = $_POST['nascimento'];
    $genero = $_POST['genero'];
    $texto = $_POST['texto']; 

    $query = "INSERT INTO usuario (nome, email, senha, nascimento, genero, texto) 
                    VALUES ('$nome', '$email', '$senha', '$nascimento', '$genero', '$texto')";
        
    $stmt = $pdo->prepare($query);
    $stmt->execute([$nome, $email, $senha, $nascimento, $genero, $texto]);

    header("Location: sucessobd.php?criado=sucesso");
    
}
