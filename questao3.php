<?php

	$menor = 10;
	$i=1;
	$listavalor = array(0=> rand(1, 10), 1=>rand(1, 10), 2=>rand(1, 10), 3=>rand(1, 10), 4=>rand(1, 10));

	foreach($listavalor as $a){
		
		if($a <= $menor){
			$menor = $a;
			$i++;	
		}
		echo($a."<br>");
	}
	echo("o menor é: ".$menor .", e está na linha: ".$i);

?>