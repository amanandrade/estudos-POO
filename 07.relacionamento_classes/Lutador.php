<?php 
    class Lutador{
        //definindo atributos
        private $nome;
        private $nacionalidade;
        private $idade, $altura, $peso;
        private $categoria, $vitorias, $derrotas, $empates;

        //definindo métodos (específicos, com abstração)
        public function apresentar(){
            echo("<br> ----------------------- <br>");
            echo("<br> CHEGOU A HORA! O lutador: {$this->getNome()} ");
            echo("veio diretamente de {$this->getNacionalidade()}; <br>");
            echo("tem {$this->getIdade()} anos; <br>");
            echo("{$this->getAltura()}m de altura; <br>");
            echo("Ganhou: {$this->getVitorias()}; <br>");
            echo("Perdeu: {$this->getDerrotas()}; <br>");
            echo("Empatou: {$this->getEmpates()}. <br>");
        }

        public function status(){
            echo("<br> ----------------------- <br>");
            echo("Lutador: {$this->getNome()}");
            echo(" é um peso {$this->getCategoria()}");
            echo(" com {$this->getVitorias()} vitórias,");
            echo(" {$this->getDerrotas()} derrotas e");
            echo(" {$this->getEmpates()} empates.");
        }

        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }

        //definindo métodos especiais(construct)
        public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates){
            $this->nome = $nome;
            $this->nacionalidade = $nacionalidade;
            $this->idade = $idade;
            $this->altura = $altura;
            $this->setPeso($peso);
            //$this->peso = $peso;
            $this->vitorias = $vitorias;
            $this->derrotas = $derrotas;
            $this->empates = $empates;
        }
        
        //definindo métodos especiais (getters)
        public function getNome(){
            return $this->nome;
        }
        public function getNacionalidade(){
            return $this->nacionalidade;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function getAltura(){
            return $this->altura;
        }
        public function getPeso(){
            return $this->peso;
        }
        public function getCategoria(){
            return $this->categoria;
        }
        public function getVitorias(){
            return $this->vitorias;
        }
        public function getDerrotas(){
            return $this->derrotas;
        }
        public function getEmpates(){
            return $this->empates;
        }

        //definindo métodos especiais (setters)
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setNacionalidade($nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }
        public function setAltura($altura){
            $this->altura = $altura;
        }
        public function setPeso($peso){
            $this->peso = $peso;
            $this->setCategoria(); //chama a categoria com o peso
        }
        private function setCategoria(){
            if ($this->peso < 52.0){
                $this->categoria = "Inválido";
            } elseif ($this->peso <= 70.3){
                $this->categoria = "Leve";
            } elseif ($this->peso <= 83.9){
                $this->categoria = "Médio";
            } elseif ($this->peso <= 120.2){
                $this->categoria = "Pesado";
            } else {
                $this->categoria = "Inválido";
            }
        }
        public function setVitorias($vitorias){
            $this->vitorias = $vitorias;
        }
        public function setDerrotas($derrotas){
            $this->derrotas = $derrotas;
        }
        public function setEmpates($empates){
            $this->empates = $empates;
        }

    }
