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
            require_once('Celular.php');

            $c = new Celular('Samsung', 'J7', 'preto', '12gb', '64gb');
            $c->ligar();
            // $c->realizarChamada('99999999');
            // $c->encerrarChamada();
            $c->desligar();
            $c->bloquearTela();
            echo '<br>';
            print_r($c);
        ?>
    </pre>

</body>

</html>