<?php

session_start();
include "aluno.php";

$aluno = unserialize($_SESSION['aluno']);

echo $aluno->nome;   
echo ",";
echo $aluno->idade();



?>
