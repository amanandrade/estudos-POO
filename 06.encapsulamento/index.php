<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encapsulamento em Controle Remoto</title>
</head>
<body>
    <?php 

    require_once 'ControleRemoto.php';
    $c = new ControleRemoto();
    $c->ligar();
    $c->maisVolume();
    $c->abrirMenu();

    print('<pre>');
    print_r($c);
    print('</pre>');

    ?>
</body>
</html>