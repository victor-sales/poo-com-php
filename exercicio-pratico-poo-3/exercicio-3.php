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
            require_once('Gafanhoto.php');
            require_once('Video.php');
            require_once('Visualizacao.php');

            $gafanhoto = array();
            $video = array();
            $visualizacao = array();

            $gafanhoto[0] = new Gafanhoto('Victor', 24, 'M', 'victor_gafanhoto');
            $gafanhoto[1] = new Gafanhoto('Jordania', 28, 'F', 'jordania_gafanhoto');

            $video[0] = new Video('Video 01');
            $video[1] = new Video('Video 02');
            $video[2] = new Video('Video 03');
            
            $visualizacao[0] = new Visualizacao($gafanhoto[0], $video[1]);
            $visualizacao[1] = new Visualizacao($gafanhoto[0], $video[2]);

            $visualizacao[0]->avaliar();

            // print_r($gafanhoto);
            // print_r($video);
            print_r($visualizacao);
        ?>
    </pre>
</body>

</html>