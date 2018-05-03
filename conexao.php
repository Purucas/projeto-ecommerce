<?php

//Conectar a base de dados
$conexao = mysqli_connect("localhost", "root", "");

//Acessar o banco de dados

$banco = mysqli_select_db($conexao, 'gravadoras');

//Compatibilizar o nome da base de dados quando for acentuadas e/ou com cedilhas.
mysqli_set_charset($conexao, 'utf-8');




?>