<?php

    class user
    {

        /*
        nivel 1 = administrador
        nivel 2 = supervisor 
        nivel 3 = padrao
        nivel 4 = Estagiario


        */


        private $id;
        private $nome;
        public $nivel_a;

        function __construct($id,$nome,$nivel_a){
            $this->id=$id;
            $this->nome=$nome;
            $this->nivel_a=$nivel_a;

        }

        public function acao($nivel_a){
            switch ($nivel_a) {
                case 1:
                    $this->ler();
                    $this->inserir();
                    $this->alterar();
                    $this->excluir();
                    break;
                case 2:
                    $this->ler();
                    $this->inserir();
                    $this->alterar();
                    break;
                case 3:
                    $this->ler();
                    $this->inserir();                 
                    break;
                case 4:
                    $this->ler();
                    break;    
             }
        }

        public function ler(){
            
            echo "<pre>";
            echo "Lendo";
            echo "</pre>"; 
         
        }

        public function inserir(){
            echo "<pre>";
            echo "inserindo";
            echo "</pre>"; 
        }

        public function alterar(){
            echo "<pre>";
            echo "alterando";
            echo "</pre>"; 
        }

        public function excluir(){
            echo "<pre>";
            echo "excluindo";
            echo "</pre>"; 
        }

        public function get_id(){
            return $this->id;
        }

        public function get_nome(){
            return $this->nome;
        }

        public function get_nivel_a(){
            return $this->nivel_a;
        }

        public function set_id($id){
            $this->id = $id;
        }

        public function set_nome($nome){
            $this->nome = $nome;
        }

        public function set_nivel_a($nivel_a){
            $this->nivel_a = $nivel_a;
        }
    }

?>