<?php

    class nota
    {

        private $numero;
        private $data;
        private $chave;
        private $cnpj;
        private $nome_emissor;
        private $doc_cliente;
        private $nome_cliente;
        private $produtos;
        
        function __construct($numero,$data,$chave,$cnpj,$nome_emissor,$doc_cliente,$nome_cliente,$produtos){
            $this->numero = $numero;
            $this->data = $data;
            $this->chave = $chave;
            $this->cnpj = $cnpj;
            $this->nome_emissor = $nome_emissor;
            $this->doc_cliente = $doc_cliente;
            $this->nome_cliente = $nome_cliente;
            $this->produtos = $produtos;
        }

	public function get_Numero(){
		return $this->$numero;
	}

	public function set_Numero($numero) {
		$this->numero = $numero;
    }
    
    public function get_data(){
		return $this->$data;
	}

	public function set_data($data) {
		$this->data = $data;
    }
    
    public function get_chave(){
		return $this->$chave;
	}

	public function set_chave($chave) {
		$this->chave = $chave;
    }
    
    public function get_cnpj(){
		return $this->$cnpj;
	}

	public function set_cnpj($cnpj) {
		$this->cnpj = $cnpj;
    }
    
    public function get_nome_emissor(){
		return $this->$nome_emissor;
	}

	public function set_nome_emissor($nome_emissor) {
		$this->nome_emissor = $nome_emissor;
    }
    
    public function get_doc_cliente(){
		return $this->$doc_cliente;
	}

	public function set_doc_cliente($doc_cliente) {
		$this->doc_cliente = $doc_cliente;
    }
    
    public function get_nome_cliente(){
		return $this->$nome_cliente;
	}

	public function set_nome_cliente($nome_cliente) {
		$this->nome_cliente = $nome_cliente;
    }
    
    public function get_produtos(){
		return $this->$produtos;
	}

	public function set_produtos($produtos) {
		$this->produtos = $produtos;
	}


    }

?> 