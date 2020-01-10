<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conta Bancária</title>
</head>
<body>
    <?php 
        require_once 'ContaBanco.php';
        $p1 = new ContaBanco(); //jubileu
        $p2 = new ContaBanco(); //creusa

        $p1->abrirConta("CC");
        $p1->setDono("Jubileu");
        $p1->setNumConta(1111);
        $p2->abrirConta("CP");
        $p2->setDono("Creusa");
        $p2->setNumConta(2222);

        $p1->depositar(300);
        $p2->depositar(500);
        $p2->sacar(100);

        $p1->pagarMensal();
        $p2->pagarMensal();

        $p2->sacar(1000);
        $p1->sacar(338);

        $p1->fecharConta();
        $p2->fecharConta();

        $p1->sacar(15);
        $p2->sacar(600);
        $p2->fecharConta();

        print('<pre>');
        print_r($p1);
        print("<br>");
        print_r($p2);
        print('</pre>');
    ?>
</body>
</html>