<?php 
    class ContaBanco{
        //definindo atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        
        //definindo métodos específicos                
        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t == "CC"){
                $this-> setSaldo(50);
            } elseif ($t == "CP") {
                $this-> setSaldo(150); 
            }
        }

        public function fecharConta(){
            if ($this->getSaldo() > 0 ){
                echo("<p>Conta com dinheiro! Não pode ser encerrada.<p>");
            } elseif ($this->getSaldo() < 0){
                echo("<p>Conta em débito! Pague sua dívida antes.<p>");
            } else {
                $this->setStatus(false); //aqui a conta é desabilitada.
                echo("<p>Conta de {$this->getDono()} encerrada com sucesso.<p>");
            }
        }

        public function depositar($v){
            if ($this->getStatus()){
                //$saldo = $saldo + $v /// $this->saldo = $this->saldo + $v
                $this->setSaldo($this->getSaldo() + $v);
                echo("<p>Depósito de R$ $v na conta de {$this->getDono()}.<p>");
            } else {
                echo("<p>Conta fechada, não é possível depositar.<p>");
            }
        }

        public function sacar($v){
            if ($this->getStatus()){
                //if ($this->getSaldo() >= $v) // não deixa a conta ficar negativa.  
                if ($this->getSaldo()){ 
                    $this->setSaldo($this->getSaldo() - $v);
                    echo("<p>Saque de R$ $v autorizado na conta de {$this->getDono()}.<p>");
                } else {
                    echo("<p>Saldo insuficiente para saque.<p>");
                }
            } else {
                echo("<p>Impossível sacar de uma conta fechada.<p>");
            }
        }

        public function pagarMensal(){
            //$v = 0; não é necessário fazer isso no php
            if ($this->getTipo() == "CC"){
                $v = 12;
            } elseif ($this-> getTipo() == "CP"){
                $v = 20;
            }

            if ($this->getStatus()){
                if ($this->getSaldo() >= $v){
                    $this->setSaldo($this->getSaldo() - $v);
                    echo("<p>Mensalidade de R$ $v debitada na conta de {$this->getDono()}.<p>");
                } else {
                    echo("<p>Saldo insuficiente.<p>");
                }
            } else {
                echo("<p>Impossível pagar.<p>");
            }
        }

        //definindo métodos especiais
        public function __construct(){
            $this->setSaldo(0);
            $this->setStatus(false);
            echo("<p>Conta criada com sucesso.</p>");
        }

        public function setNumConta($numConta){
            $this->numConta = $numConta;
        }

        public function getnumConta(){
            return $this->numConta;
        }

        public function setTipo($tipo){
            $this->tipo = $tipo;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setDono($dono){
            $this->dono = $dono;
        }

        public function getDono(){
            return $this->dono;
        }

        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function setStatus($status){
            $this->status = $status;
        }

        public function getStatus(){
            return $this->status;
        }

    }

