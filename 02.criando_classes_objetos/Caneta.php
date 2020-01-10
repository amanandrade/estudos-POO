<?php 

class Caneta {
    //o var é uma definição genérica e por padrão, está como 
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar(){
       //ação do método:
       if ($this->tampada == true){
           echo("<p>ERRO! Não possso rabiscar.<p>");
       } else {
           echo("<h2>Estou rabiscando...<h2>");
       }
    }

    function tampar(){
        $this->tampada = true;
    }

    function destampar(){
        $this->tampada = false;
    }
}