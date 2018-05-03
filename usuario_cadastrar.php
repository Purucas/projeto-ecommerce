<?php

//Incluir um arquivo

include "conexao.php";

//Pegar as informações dos campos do formulário. Usar a super variável que faz referência ao método de envio usado nele

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];

//Verificar se o usuário já está cadastrado

$verificar = "SELECT email FROM gerentes WHERE email = '$email'";

$resultado = mysqli_query($conexao, $verificar);
	if($dados=mysqli_fetch_assoc($resultado)){
		echo "O email ".$email." já está em uso.";
		mysqli_close($conexao);
	} else{

$verificar = "SELECT cpf FROM gerentes WHERE cpf = '$cpf'";

$resultado = mysqli_query($conexao, $verificar);
	if($dados=mysqli_fetch_assoc($resultado)){
		echo "O cpf ".$cpf." já está em uso.";
		mysqli_close($conexao);
	} else{

//Montar as cláusulas (intruções) MySql/Sql para envio dos dados

$inserir = "INSERT INTO gerentes(cpf, nome, email, senha) VALUES('$cpf', '$nome', '$email', '$senha')";

//Enviar os dados pra tabela

$enviar = mysqli_query($conexao, $inserir);

//Verificar se o usuário foi cadastrado

if($enviar){
	echo "<b>Gerente cadastrado com sucesso.</b>";
}
else {
	echo "Gerente não cadastrado.";
}
}
}


?>