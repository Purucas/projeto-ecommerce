<?php 
include 'conexao.php';
$nopro = $_GET ['busca'];

//banco
$stmt= $pdo-> prepare("SELECT * FROM produtos WHERE nomeproduto =?");
$stmt-> bindparam (1,$nopro , PDO::PARAM_STR); 

// Executando statement 
$stmt->execute(); 

// Obter linha consultada 
$alvos = $stmt->fetchAll(); 
// Se a linha existe: indicar que esta logado e encaminhar para outro lugar 
//if ($busca) { 
//$_SESSION['nome'] = $busca[0]['nomeproduto']; 
foreach ($alvos as $busca) {
?>
<div class="container col-md-2">
<h1> <?php echo $produto['nomeproduto']; ?></h1>
<h2>R$ <?php echo $produto['precoproduto']; ?></h2>
<img src= "imagens/<?php echo $produto['fotodoproduto']; ?>.jpg">
<form action="carrinho.php" method="post">
  <input type="hidden" name="nomeproduto" value="<?php echo $produto['nomeproduto']; ?>">
  <input type="hidden" name="precoproduto" value="<?php echo $produto['precoproduto'];?>">
  <input type="hidden" name="fotodoproduto" value="<?php echo $produto['fotodoproduto'];?>">
  <button type="submit" class="btn btn-primary">carrinho</button>
</form>
</div> 
 <?php
}

?>













 ?>