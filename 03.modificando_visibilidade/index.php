<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 02 - POO</title>
</head>
<body>
    <?php 
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->modelo = "Bic Cristal";
        print('<pre>');
        print_r($c1);
        print('</pre>');
        
    ?>
</body>
</html>