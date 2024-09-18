<?php
session_start();
include "aluno.php";

$aluno = unserialize($_SESSION['aluno']);
session_destroy();  
session_write_close();

header("Location: formulario.php");
?>
