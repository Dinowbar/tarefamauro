<?php

session_start();
include "aluno.php";

$aluno = unserialize($_SESSION['aluno']);

echo $aluno->nome."<br>";
echo $aluno->nascimento."<br>";
echo $aluno->tiposangue."<br>";
echo $aluno->matricula;



?>