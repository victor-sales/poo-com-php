<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    
    <?php
        require_once('Ave.php');
        require_once('Mamifero.php');
        require_once('Reptil.php');
        require_once('Peixe.php');
        require_once('Cachorro.php');

        $ave = new Ave;
        $mamifero = new Mamifero;
        $reptil = new Reptil;
        $peixe = new Peixe;

        $cachorro = new Cachorro;

        $ave->emitirSom();
        $ave->locomover();
        $ave->alimentar();

        $mamifero->emitirSom();
        $mamifero->locomover();
        $mamifero->alimentar();

        $reptil->emitirSom();
        $reptil->locomover();
        $reptil->alimentar();

        $peixe->emitirSom();
        $peixe->locomover();
        $peixe->alimentar();

        $cachorro->reagirDono('olá');
    ?>
    
    </pre>
</body>

</html>