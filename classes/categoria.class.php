<?php

class Categoria{

    protected $id;
    protected $nome;

    public function setnome($n){
        $this->nome=$n;
    }
    public  function getNome(){
        return $this->nome;
    }

}

?>