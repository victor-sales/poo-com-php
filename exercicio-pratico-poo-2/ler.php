<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        require_once('Pessoa.php');
        require_once('Livro.php');
        require_once('Publicacao.php');

        $pessoa = new Pessoa("Pedro", 25, "M");
        $livro = new Livro("Livro teste", "Carlos Teste", 300, $pessoa);

        $livro->detalhes();
        $livro->abrir();
        $livro->folhear(20);
        $livro->detalhes();
        $livro->avançarPag();
        $livro->detalhes();
        $livro->voltarPag();
        $livro->detalhes();
        $livro->folhear(0);
        $livro->detalhes();
        $livro->voltarPag();
        $livro->detalhes();
        $livro->fechar();
        $livro->avançarPag();
        $livro->abrir();
        $livro->folhear(300);
        $livro->avançarPag();
    ?>
</body>

</html>