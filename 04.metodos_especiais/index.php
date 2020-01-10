<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 04</title>
</head>
<body>
    <?php 
        require_once 'Caneta.php';
        //$c1 = new Caneta;
        $c1 = new Caneta("BIC", "Azul", 0.5);
        $c2 = new Caneta("NIC", "Vermelha", 1);
        //$c1->setModelo("BIC");
        //$c1->Modelo = "NIC"; -----> essa forma é a não segura e não usual, mas traz o mesmo resultado.
        //$c1->setPonta(0.5);
        //$c1->Ponta = "0.6"; -----> essa forma é a não segura e não usual, mas traz o mesmo resultado, embora possa conflitar com os modificaores de visibilidade.
        print('<pre>');
        print_r($c1);
        print_r($c2);
        print('</pre>');
        //print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}."
        
    ?>
</body>
</html>