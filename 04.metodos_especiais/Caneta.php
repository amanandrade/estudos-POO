<?php 

class Caneta {
    public $modelo;
    private $ponta;
    private $cor;
    private $tampada;

    // public function __construct(){  
    //     $this->cor = "Azul";
    //     $this->tampar = true;
    // }
    
    //segunda opção para descrever OBSOLETA colocar o nome da classe diretamente:
    public function Caneta($m, $c, $p){
        $this->setModelo($m);
        $this->cor = $c;
        $this->setPonta($p);
        $this->tampar();
    }

    public function tampar(){
        $this->tampada = true;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getPonta(){
        return $this->ponta;
    }

    public function setPonta($p){
        $this->ponta = $p;
    }
    
}