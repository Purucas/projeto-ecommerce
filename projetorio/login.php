<?php 

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$con = mysql_connect("127.0.0.1", "root", "digite a senha do banco aqui") or die ("Sem conexão com o servidor");
$select = mysql_select_db("server") or die("Sem acesso ao DB, Entre em contato com o Administrador, Puruca171@hotmail.com");
 

$result = mysql_query("SELECT * FROM `usuario` WHERE `nome` = '$login' AND `senha`= '$senha'");

if(mysql_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:virtualrio2.php');
}
else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    header('location:virtualrio2.php');
     
    }
 
?>
