<?php
class aluno{
    public $nome;
    public $nascimento;
    public $matricula;
    public $tiposangue;
    
        
    public function __construct($nome, $nascimento, $tiposangue, $matricula) {
        $this->nome = $nome;
        $this->nascimento = $nascimento;
        $this->tiposangue = $tiposangue;
        $this->matricula = $matricula;
        }
        
    public function idade(){
       $ano = substr($this->nascimento, 0, 4);
       $atual = date("Y");
       return $atual - $ano;
    }
}





?>
