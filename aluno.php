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
    $dataAtual = new Datetime();
    $datanascimento = new Datetime($this->nascimento);
    return $dataAtual->diff($datanascimento)->y;
   }
}





?>