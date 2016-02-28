<!DOCTYPE html>
<html>
  <head>
  </head>
  <body> <!-- comentario html -->
    <?php
	$sal_bruto =  $_POST['sal_bruto'];

	//$sal_inssB =  $_POST['sal_inssB'] ;
 	 // comentario php// 
	 /* ou comentario php */
	 
	if ($sal_bruto<=1556.94) {
	 echo "O Salário bruto de R$ $sal_bruto esta na faixa salarial A do INSS  /  ";
	 $sal_inssA = $sal_bruto *0.92;
	 $valor_inssA = $sal_bruto-$sal_inssA;
	 echo "Valor a ser pago ao INSS ref. 8% do salário é de R$ $valor_inssA   / ";  
     echo "Salário líquido isento de contribuição ao IRRF: R$ $sal_inssA";
     exit();
	 }


	  if ($sal_bruto>1596.94&&$sal_bruto<=2594.92) {
	  //$sal_inssB = number_format(float);
	  $sal_inssB=$sal_bruto *0.91;
	  $valor_inssB = $sal_bruto-$sal_inssB;
	  echo "Salário bruto  R$ $sal_bruto está na faixa salarial B do INSS de 9% de contribuição  /   ";
	  echo "Valor a ser pago ao INSS R$ $valor_inssB   / ";   	
	  } 

	  if ($sal_inssB<=1903.98) {
	  	echo "Salário líq. isento de contribuição ao IRRF: R$ $sal_inssB";
	  	exit();
	 }
	  	
	  	elseif ($sal_inssB>1903.98&&$sal_inssB<=2826.65) {
	    $sal_irrfB	=  $sal_inssB*0.925+142.8;
	    $valor_irrfB =  $sal_inssB-$sal_irrfB;
	    $bruto_irrfB =  $sal_inssB-$sal_irrfB+142.8;
	    $desc_total = $sal_bruto-$sal_irrfB;
	    echo "Contribuição ao IRRF ref. 7,5% Faixa B de R$ $bruto_irrfB menos dedução de R$ 142,80 = R$ $valor_irrfB / Total de desconto somado entre INSS e IRRF: R$ $desc_total / Salário líquido final de: R$ $sal_irrfB";	
	    exit();
	    }

	    	 // O erro esta começando aqui, a partir do salario bruto de R$ 2594,92 acima ele não calcula nada**** falta corrigir!!!
 	elseif ($sal_bruto>2594.92&&$sal_bruto<=5189.82)  {
		$sal_inssC = $sal_bruto*0.89;
	}		
	if  ($sal_bruto>5189.82) {
		$sal_inssC = $sal_bruto-(5189.82*0.89);  	
	  	$valor_inssC = $sal_bruto-$sal_inssC;
	  echo "Salário bruto  R$ $sal_bruto está na faixa salarial C do INSS de 11% de contribuição mas teto maximo de R$ 5189,82 /   ";
	  echo "Valor a ser pago ao INSS R$ $valor_inssC   / ";   	
	  }

		elseif ($sal_inssC>1903.98&&$sal_inssC<=2826.65) {
	    $sal_irrfB	=  $sal_inssC*0.925+142.8;
	    $valor_irrfB =  $sal_inssC-$sal_irrfB;
	    $bruto_irrfB =  $sal_inssC-$sal_irrfB+142.8;
	    $desc_total = $sal_bruto-$sal_irrfB;
	    echo "Contribuição ao IRRF ref. 7,5% Faixa B de R$ $bruto_irrfB menos dedução de R$ 142,80 = R$ $valor_irrfB / Total de desconto somado entre INSS e IRRF: R$ $desc_total / Salário líquido final de: R$ $sal_irrfB";	
	    }

	 	elseif ($sal_inssC>2826.65&&$sal_inssB<=3751.05) {
	    $sal_irrfC	=  $sal_inssC*0.85+354.8;
	    $valor_irrfC =  $sal_inssC-$sal_irrfC;
	    $bruto_irrfC =  $sal_inssC-$sal_irrfC+354.8;
	    $desc_total = $sal_bruto-$sal_irrfC;
	    echo "Contribuição ao IRRF ref. 15% Faixa C de R$ $bruto_irrfC menos dedução de R$ 354,80 = R$ $valor_irrfC / Total de desconto somado entre INSS e IRRF: R$ $desc_total / Salário líquido final de: R$ $sal_irrfC";	
	    }

		elseif ($sal_inssC>3751.05&&$sal_inssC<=4664.68) {
	    $sal_irrfD	=  $sal_inssC*0.775+636.13;
	    $valor_irrfD =  $sal_inssC-$sal_irrfD;
	    $bruto_irrfD =  $sal_inssC-$sal_irrfD+636.13;
	    $desc_total = $sal_bruto-$sal_irrfD;
	    echo "Contribuição ao IRRF ref. 22,5% Faixa D de R$ $bruto_irrfD menos dedução de R$ 636,13 = R$ $valor_irrfD / Total de desconto somado entre INSS e IRRF: R$ $desc_total / Salário líquido final de: R$ $sal_irrfD";	
	    }			
	
	    elseif ($sal_inssC>4664.68) {
	    $sal_irrfE	=  $sal_inssC*0.725+869.36;
	    $valor_irrfE =  $sal_inssC-$sal_irrfE;
	    $bruto_irrfE =  $sal_inssC-$sal_irrfE+869.36;
	    $desc_total = $sal_bruto-$sal_irrfE;
	    echo "Contribuição ao IRRF ref. 27,5% Faixa E de R$ $bruto_irrfE menos dedução de R$ 869,36 = R$ $valor_irrfE / Total de desconto somado entre INSS e IRRF: R$ $desc_total / Salário líquido final de: R$ $sal_irrfE";	
	    }			


	 ?>	
  </body>
</html>

