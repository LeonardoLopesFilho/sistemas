<?php

    class product
    {

        private $id;
        private $nome;
        private $quantidade;
        private $descricao;
        private $valor;

        function __construct($id,$nome,$quantidade,$descricao,$valor){
            $this->id=$id;
            $this->nome=$nome;
            $this->quantidade=$quantidade;
            $this->descricao=$descricao;
            $this->valor=$valor;

        }

        public function get_id(){
            return $this->id;
        }

        public function get_nome(){
            return $this->nome;
        }

        public function get_quantidade(){
            return $this->quantidade;
        }

        public function get_descricao(){
            return $this->descricao;
        }

        public function get_valor(){
            return $this->valor;
        }

        public function set_id($id){
            $this->id = $id;
        }

        public function set_nome($nome){
            $this->nome = $nome;
        }

        public function set_quantidade($quantidade){
            $this->quantidade = $quantidade;
        }

        public function set_descricao($descricao){
            $this->descricao = $descricao;
        }

        public function set_valor($valor){
            $this->valor = $valor;
        }
    }

?>