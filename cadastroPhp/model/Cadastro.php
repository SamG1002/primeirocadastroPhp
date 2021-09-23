<?php
    class Cadastro {
        //variaveis

        private $nome = 'Nome Indefino';
        private $rg = 'Rg Indefino';
        private $cpf = 'CPF Indefino';

        //setters

        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setRg($rg){
            $this->rg = $rg;
        }
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        //getters

        public function getNome(){
            return $this->nome;
        }
        public function getRg(){
            return $this->rg;
        }
        public function getCpf(){
            return $this->cpf;
        }

    }

?>