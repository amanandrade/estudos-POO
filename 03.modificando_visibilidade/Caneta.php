<?php 

class Caneta {
    //o var é uma definição genérica e por padrão, está como 
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar(){
       //ação do método:
       if ($this->tampada == true){
           echo("<p>ERRO! Não possso rabiscar.<p>");
       } else {
           echo("<h2>Estou rabiscando...<h2>");
       }
    }

    private function tampar(){
        $this->tampada = true;
    }

    private function destampar(){
        $this->tampada = false;
    }
    
}