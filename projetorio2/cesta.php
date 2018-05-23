<?php

session_start();

//VERIFICA SE TEM PRODUTO NO CARRINHO PARA PUXAR
if(count($_SESSION['cesta']) > 0) { 
   //PEGA A CHAVE DO ARRAY
   $chave   =   array_keys($_SESSION['cesta']);
   
   //PEGA OS DADOS DA SESSÃO
   for($i=0; $i<sizeof($chave); $i++) { 
      //ÍNDICE
      $indice   =   $chave[$i]; 
      
      //ATRIBUI
      $cesta = $_SESSION['cesta'];
      $cesta[$indice]['precoproduto']  =    $_SESSION[cesta][$indice]['precoproduto'];
      $cesta[$indice]['nomeproduto']    =    $_SESSION[cesta][$indice]['nomeproduto'];
      $cesta[$indice]['fotodoproduto']    =    $_SESSION[cesta][$indice]['fotodoproduto'];
      
   }//FECHA FOR
}//FECHA IF



//VERIFICA SE A OPÇÃO ATUALIZAR FOI SELECIONADA
if($_POST[opc_atualizar]) {
   
   //RECEBE OS PRODUTOS CHECADOS PARA ATUALIZAÇÃO
   $v_atualiza  =  $_POST[a_prod];
   
   //PEGA A CHAVE DO ARRAY
   $chave  =  array_keys($v_atualiza);
   
   //EXIBE
   for($i=0; $i<sizeof($chave); $i++) {
      //PEGA O INDICE DO PRODUTO
      $indice   =   $chave[$i];
      
      //ALTERA A QUANTIDADE DO PRODUTO SELECIONADO
      $_SESSION[cesta][$indice][QTDE]   =  $v_atualiza[$indice][QTDE];
   }//FECHA FOR
}//FECHA IF


//VERIFICA SE A OPÇÃO EXCLUIR FOI SELECIONADA
elseif($_POST[opc_excluir]) {
   
   //RECEBE OS PRODUTOS CHECADOS PARA EXCLUSÃO
   $excluir  =  $_POST[check];
   
   //EXIBE
   for($i=0; $i<sizeof($excluir); $i++) {
      //PEGA O INDICE DO PRODUTO
      $indice   =   $excluir[$i];
      //DESTRÓI A VARIÁVEL ESPECIFICADA
      unset($_SESSION[cesta][$indice]);
   }//FECHA FOR
}//FECHA IF



//RECEBE O PEDIDO DO USUÁRIO
elseif($_POST[opc_efetivar]) {
   //RECEBE AS VARIÁVEIS
   $v_prod   =  $_POST[txtprod];
   
   //PEGA A CHAVE DO ARRAY
   $chave  =  array_keys($v_prod);
   
   
   //EXIBE
   for($i=0; $i<sizeof($chave); $i++) {
      $indice  =  $chave[$i];
      
      //VERIFICA
      if(!empty($v_prod[$indice][QTDE]) ) {
      
         //GRAVA NO ARRAY CESTA
         $cesta[$indice][ARTISTA]  =    $v_prod[$indice][ARTISTA];
         $cesta[$indice][ALBUM]    =    $v_prod[$indice][ALBUM];
         $cesta[$indice][PRECO]    =    $v_prod[$indice][PRECO];
         $cesta[$indice][QTDE]     =    $v_prod[$indice][QTDE];
      }//FECHA IF
   }//FECHA FOR
   
   //GRAVA NA SESSÃO
   $_SESSION[cesta]        =   $cesta;
}//FECHA ELSE
?>