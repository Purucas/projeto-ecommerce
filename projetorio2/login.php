<!DOCTYPE html>
<?php
session_start();
echo $_SESSION ['nome'];



?>
<html lang="pt-br">
	<head>
		<title>Virtual RIO</title>
		<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
  <body>



    <div class="container-fluid">
  		<header style="background-color: #32CD32 " >
  			<h1 class ="titulo">Virtual RIO</h1>
  		</header>



      <div class="row" style="background-color: #32CD32">

        <div class="col-md-4">
          <a href="index.php">
            <img src="imagens/icone2.jpg" style="width: 50%; height: auto">
          </a>
        </div>

        <div class="col-md-4" style="margin-top: 60px; width: 50%">
            <form class="form-inline text-center" >
              <input class="form-control" type="search" placeholder="O que você procura? " aria-label="Search" style="width: 100%">
            </form>
        </div>

        <div class="col-md-4" style="margin-top: 60px; text-align: center">
         <h3> <a style="color: Black" href="cadastro.php">Cadastre-se</a></br> </h3>
          <h3> <a style="color: Black" href="#">Login</a></h3>
        </div>

      </div>
<body>
<div class="row">
          
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark col-md-12">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                      <a style="color: #fff" class="nav-link" href="virtualrio2.php">HOME<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                      <a style="color: #fff" class="nav-link" href="produtos.php?categoria=livros">LIVROS <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                      <a style="color: #fff" class="nav-link" href="produtos.php?categoria=celulares">CELULARES E TELEFONES <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                      <a style="color: #fff" class="nav-link" href="produtos.php?categoria=consoleGames">CONSOLES E GAMES <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                      <a style="color: #fff" class="nav-link" href="produtos.php?categoria=eletrodomestico">ELETRODOMÉSTICOS <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                      <a style="color: #fff" class="nav-link" href="produtos.php?categoria=informatica">INFORMÁTICA <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                      <a style="color: #fff" class="nav-link" href="produtos.php?categoria=moveis">MÓVEIS E DECORAÇÕES <span class="sr-only">(current)</span></a>
                </li>
            
              </ul>
                </div>
          </nav> 
      </div>	
	<div class="box-parent-login">
	<div class="well bg-white box-login">
		<h1 class="ls-login-logo">Virtual RIO</h1>
<div id="register" class="animate form">
		<form role="form" action="select_login.php" method="post">
			<fieldset>
 

				<div class="form-group ls-login-user">
					<label for="userLogin">Nome</label>
					<input class="form-control ls-login-bg-user input-lg" name="nome" id="userLogin" type="text" aria-label="nome" placeholder="Seu Nome ">
				</div>
 
				<div class="form-group ls-login-password">
					<label for="userPassword">Senha</label>
					<input class="form-control ls-login-bg-password input-lg" name="senha" type="password" aria-label="Senha" placeholder="Senha">
				</div>
 
				<a href="#" class="ls-login-forgot">Esqueci minha senha</a>
      
				<input  type="submit" value="Entrar"  class="btn btn-primary btn-lg btn-block col-md-2">
        
				<p class="txt-center ls-login-signup">Não possui um usuário na Virtual RIO?
					<a href="cadastro.php">Cadastre-se agora</a>
				</p>
 






			</fieldset>
		</form>
</div>    
	</div>
</div>


</body>
</html>