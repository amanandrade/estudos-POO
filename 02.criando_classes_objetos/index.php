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
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = true;
        $c1->destampar();

        //chamando o método rabiscar dentro da classe caneta.
        $c1->rabiscar();
        print_r($c1);
        echo("<br>");
        
        //criando nova caneta
        $c2 = new Caneta;
        $c2->cor = "Vermelha";
        $c2->carga = 50;
        $c2->tampar();
        print_r($c2);
    ?>
</body>
</html>