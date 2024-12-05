<?php

// Definindo as classes (poderiam estar em arquivos separados, mas vamos deixá-las aqui para simplificar)
class Autor {
    public $nome;
    public $email;
    public $website;
}

class Livro {
    public $titulo;
    public $isbn;
    public $nPaginas;
    public $anoPublicacao;
    public $numEdicao;

    function __construct($titulo, $anoPublicacao, $isbn = "") {
        $this->titulo = $titulo;
        $this->anoPublicacao = $anoPublicacao;
        $this->isbn = $isbn;
    }
}

class Editora {
    public $nome;
    public $telefone;
    public $email;
    public $website;
}

// Criando livros
$livro1 = new Livro("As Crônicas de Nárnia", 1898, "978-0-00-000000-1");
$livro2 = new Livro("O Homem que Matou Getulio Vargas", 1998, "978-0-00-000000-2");
$livro3 = new Livro("Revolução dos Bichos", 1945, "978-0-00-000000-3");
$livro4 = new Livro("A Metamorfose", 1915, "978-0-00-000000-4");

$livros = array($livro1, $livro2, $livro3, $livro4);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
</head>
<body>
    <h1>Lista de Livros</h1>
    <ul>
        <?php foreach($livros as $livro): ?>
            <li>
                <a href="detalhes_livro.php?isbn=<?php echo $livro->isbn; ?>">
                    <?php echo $livro->titulo; ?> (<?php echo $livro->anoPublicacao; ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
