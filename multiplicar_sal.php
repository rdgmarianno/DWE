<!DOCTYPE html>
<html>
  <head>
  	<title>Calculadora Salarial</title>
	<meta charset="utf-8">
  </head>
  <body> <!-- comentario html -->
    
    <?php
	$sal_bruto=$_POST['sal_bruto'];
	$sal_inssA=0;	
	$sal_inssB=0;
	$sal_inssC=0;
	$valor_inssC=0;

	if ($sal_bruto<0) {
	echo "<br/><br/>*******ATENÇÃO!*******<br/><br/>";
	echo "O valor do salário não pode ser <b>negativo</b>! Digite o valor correto!!";
	exit();
	}	

	if ($sal_bruto>0&&$sal_bruto<=1556.94) {
	echo "<br/><br/>*******<strong>RESULTADO</strong>*******<br/><br/>";
	echo "<br/>O Salário bruto de R$ $sal_bruto, está na faixa salarial A do INSS.";
	echo "<br/><br/>";
	$sal_inssA = $sal_bruto *0.92;
	}
	
		if($sal_inssA>0&&$sal_inssA<=1903.98) {
		$valor_inssA = $sal_bruto-$sal_inssA;
		echo "Valor a ser pago ao INSS é de 8% do salário bruto, valor da contribuição: <b>R$ $valor_inssA</b> ";  
		echo "<br/><br/>";
     		echo "O salário líquido isento de contribuição ao IRRF é de: <strong>R$ $sal_inssA</strong>";
     		echo "<br/><br/>";
     		exit();
	 	}

	if ($sal_bruto>1596.94&&$sal_bruto<=2594.92) {
	//$sal_inssB = number_format(float); ** falta por o round para arredondar os valores, verificar como faz**
	$sal_inssB = $sal_bruto *0.91;
	$valor_inssB = $sal_bruto-$sal_inssB;
	echo "<br/><br/><strong>*******RESULTADO*******</strong><br/><br/>";
	echo "<br/>O Salário bruto de R$ $sal_bruto, está na faixa salarial B do INSS.";
	echo "<br/><br/>";
	echo "Valor a ser pago ao INSS é de 9% do salário bruto, valor da contribuição: <b>R$ $valor_inssB</b>";   	
	echo "<br/><br/>";
	} 

		if ($sal_inssB>0&&$sal_inssB<=1903.98) {
	  	echo "Faixa A do IRRF, Salário líquido isento de contribuição: <b>R$ $sal_inssB</b>";
	  	exit();
	 	}
	  	
	  	if ($sal_inssB>1903.98&&$sal_inssB<=2826.65) {
		$sal_irrfB = $sal_inssB*0.925+142.8;
	    	$valor_irrfB =  $sal_inssB-$sal_irrfB;// calcula o valor do imposto de renda a ser pago.
	    	$bruto_irrfB =  $sal_inssB-$sal_irrfB+142.8;
	    	$desc_total = $sal_bruto-$sal_irrfB;
	    	echo "Faixa B do IRRF de 7,5%, contribuição de R$ $bruto_irrfB, menos a dedução de R$ 142,80 = </b>R$ $valor_irrfB</b>.";
	    	echo "<br/><br/>"; 
	    	echo "Total de descontos entre INSS e IRRF: </b>R$ $desc_total</b>"; 
	    	echo "<br/><br/>O Salário líquido final é de: <strong>R$ $sal_irrfB</strong>";	
	    	exit();
	    	}

  	if ($sal_bruto>2594.92&&$sal_bruto<=5189.82) {
	$sal_inssC = $sal_bruto*0.89;
	$valor_inssC = $sal_bruto-$sal_inssC;
	echo "<br/><br/><strong>*******RESULTADO*******</strong><br/><br/>";
	echo "<br/>O salário bruto de R$ $sal_bruto, está na faixa salarial C do INSS, com teto máximo para contribuição de R$ 5.189,82"; 
	echo "<br/>";
	echo "Valor a ser pago ao INSS ref. 11% do salário bruto é de <b>R$ $valor_inssC</b>";   	
	echo "<br/><br/>";
	}		
	
	if  ($sal_bruto>5189.82) {
	$sal_inssC = $sal_bruto-(5189.82*0.11);  	
	$valor_inssC = 5189.82*0.11;
	echo "<br/><br/><strong>*******RESULTADO*******</strong><br/><br/>";
	echo "<br/>O salário bruto de R$ $sal_bruto, está na faixa salarial C do INSS, com teto máximo para contribuição de R$ 5.189,82";
	echo "<br/>";
	echo "Valor a ser pago ao INSS ref. 11% do teto salarial é de <b>R$ $valor_inssC</b> <br/>";   	
	 }
	
		if ($sal_inssC>1903.98&&$sal_inssC<=2826.65) {
	    	$sal_irrfB	=  ($sal_inssC*0.925)+142.8;
	    	$valor_irrfB =  $sal_inssC-$sal_irrfB;
	    	$bruto_irrfB =  $sal_inssC-$sal_irrfB+142.8;
	    	$desc_total = $sal_bruto-$sal_irrfB;
	    	echo "<br/>Faixa B do IRRF de 7,5%, contribuição de R$ $bruto_irrfB, menos a dedução de R$ 142,80 = <b>R$ $valor_irrfB</b>"; 
	    	echo "<br/><br/>Total de descontos entre INSS e IRRF: <b>R$ $desc_total</b> <br/><br/> Salário líquido final de: <b>R$ $sal_irrfB</b>";	
		}

	 	elseif ($sal_inssC>2826.65&&$sal_inssC<=3751.05) {
	    	$sal_irrfC	=  ($sal_inssC*0.85)+354.8;
	    	$valor_irrfC =  $sal_inssC-$sal_irrfC;
	    	$bruto_irrfC =  $sal_inssC-$sal_irrfC+354.8;
	    	$desc_total = $sal_bruto-$sal_irrfC;
	    	echo "<br/>Faixa C do IRRF de 15%, contribuição de R$ $bruto_irrfC, menos a dedução de R$ 354,80 = <b>R$ $valor_irrfC</b>"; 
	    	echo "<br/><br/>Total de descontos entre INSS e IRRF: <b>R$ $desc_total</b> <br/><br/> Salário líquido final de: <b>R$ $sal_irrfC</b>";	
	    	}

		if ($sal_inssC>3751.05&&$sal_inssC<=4664.68) {
	    	$sal_irrfD	=  ($sal_inssC*0.775)+636.13;
	    	$valor_irrfD =  $sal_inssC-$sal_irrfD;
	    	$bruto_irrfD =  $sal_inssC-$sal_irrfD+636.13;
	    	$desc_total = $sal_bruto-$sal_irrfD;
	    	echo "<br/>Faixa D do IRRF de 22,5%, contribuição de R$ $bruto_irrfD, menos dedução de R$ 636,13 = <b>R$ $valor_irrfD</b>";
	    	echo "<br/><br/>Total de descontos entre INSS e IRRF: <b>R$ $desc_total</b> <br/><br/> Salário líquido final de: <b>R$ $sal_irrfD</b>";	
	    	}			
	
	    	elseif ($sal_inssC>4664.68) {
	    	$valor_irrfE = ($sal_inssC*0.275)-869.36;
	    	$sal_irrfE= $sal_inssC-$valor_irrfE;
	    	$desc_total = $sal_bruto-$sal_irrfE;
	    	echo "<br/>Faixa E do IRRF de 27,5%, menos dedução de R$ 869,36 = <b>R$ $valor_irrfE</b><br/>";
	    	echo "<br/>Total de descontos entre INSS e IRRF: <b>R$ $desc_total</b> <br/><br/> Salário líquido final de: <b>R$ $sal_irrfE</b><br/>";	
	    	}			
	?>	
  </body>
</html>
