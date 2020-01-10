<?php 
    require_once 'Controlador.php';
    class ControleRemoto implements Controlador {
        
        //atributos da classe controle remoto
        private $volume;
        private $ligado;
        private $tocando;

        //métodos especiais da classe controle remoto
        public function __construct(){
            // $this->setVolume(50);
            // $this->setLigado(false);
            // $this->setTocando(false);
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        private function getVolume(){
            return $this->volume;
        }

        private function getLigado(){
            return $this->ligado;
        }

        private function getTocando(){
            return $this->tocando;
        }

        private function setVolume($volume){
            $this->volume = $volume;
        }

        private function setLigado($ligado){
            $this->ligado = $ligado;
        }

        private function setTocando($tocando){
            $this->tocando = $tocando;
        }

        //implementando métodos abstrados de controlador
        public function ligar(){
            $this->setLigado(true);
        }
        public function desligar(){
            $this->setLigado(false);
        }
        public function abrirMenu(){
            echo("<-----MENU-----><br>");
            echo"Controle ligado? " . ($this->getLigado()?"SIM":"NÃO");
            echo("<br>");
            echo "Controle tocando? " . ($this->getTocando()?"SIM":"NÃO");
            echo("<br>");
            echo("Volume: {$this->getVolume()}");
            for ($i=0; $i <= $this->getVolume(); $i+=10) { 
                echo("|");
            }
        }
        public function fecharMenu(){
            echo("Fechando menu.");
        }
        public function maisVolume(){  
            if ($this->getLigado()){
                $this->setVolume($this->getVolume() + 5);
            }
        }
        public function menosVolume(){
            if ($this->getLigado()){
                $this->setVolume($this->getVolume() - 5);
            }
        }
        public function ligarMudo(){
            if ($this->getLigado() && $this->getVolume() > 0){
                $this->setVolume(0);
            }
        }
        public function desligarMudo(){
            if ($this->getLigado() && $this->getVolume() == 0){
                $this->setVolume(50);
            }
        }
        public function play(){
            if ($this->getLigado() && !($this->getTocando())){
                $this->setTocando(true);
            }
        }
        public function pause(){
            if ($this->getLigado() && $this->getTocando()){
                $this->setTocando(false);
            }
        }
    }