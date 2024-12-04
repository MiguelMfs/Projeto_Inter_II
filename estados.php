<?php

// Vetor de usuários e senhas (usuário => senha)
$usuarios = array(
    "usuario1" => "senha1",
    "usuario2" => "senha2",
    "usuario3" => "senha3",
    "usuario4" => "senha4",
    "usuario5" => "senha5"
);

// Recebe os dados do formulário
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

// Verifica se o usuário existe no vetor e se a senha está correta
if (array_key_exists($usuario, $usuarios) && $usuarios[$usuario] == $senha) {
    echo "<p>Autenticação bem-sucedida! Bem-vindo, " . htmlspecialchars($usuario) . ".</p>";
} else {
    echo "<p>Falha na autenticação. Usuário ou senha incorretos.</p>";
}

?>
