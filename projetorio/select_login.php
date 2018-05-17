<?php 
include 'conexao.php';

$nome = $_POST['nome'];
$senha = $_POST['senha'];
// Preparando statement 
$stmt = $pdo->prepare("SELECT * FROM usuario WHERE nome = ? AND senha = ?"); 
$stmt->bindParam(1,$nome , PDO::PARAM_STR); 
$stmt->bindParam(2,$senha , PDO::PARAM_STR); 

// Executando statement 
$stmt->execute(); 

// Obter linha consultada 
$obj = $stmt->fetchAll(); 

// Se a linha existe: indicar que esta logado e encaminhar para outro lugar 
if ($obj) { 
$_SESSION['nome'] = $obj[0]['nome']; 
header('Location: virtualrio2.php'); 
} else { 
echo '<p class="erro">Login/Senha inv&aacute;lidos</p>'; 
}  

?> 