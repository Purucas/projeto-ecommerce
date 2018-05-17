<?PHP

function calcParcelaJuros($valor_total,$parcelas,$juros=0){
   if($juros==0){
      $string = 'PARCELA - VALOR <br />';
      for($i=1;$i<($parcelas+1);$i++){
         $string .= $i.'x (Sem Juros) - R$ '.number_format($valor_total/$parcelas, 2, ",", ".").' <br />';
      }
      return $string;
   }else{
      $string = 'PARCELA - VALOR <br />';
      for($i=1;$i<($parcelas+1);$i++){
         $I =$juros/100.00;
         $valor_parcela = $valor_total*$I*pow((1+$I),$parcelas)/(pow((1+$I),$parcelas)-1);
         $string .= $i.'x (Juros de: '.$juros.'%) - R$ '.number_format($valor_parcela, 2, ",", ".").' <br />';
      }
      return $string;
   }
}



print(calcParcelaJuros(1000,10,3));

?>



