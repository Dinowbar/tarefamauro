<?php
    include 'aluno.php';
    $aluno = new aluno($_GET['nome'], $_GET['nascimento'], $_GET['tiposangue'], $_GET['matricula']);
    
    $alunoDiferente = serialize($aluno);

    session_start();
    
    
    $_SESSION['aluno'] = $alunoDiferente;
    

    



?>