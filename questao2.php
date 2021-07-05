<?php

	//jeito 1
	$i=0;
	$a=0;
	while($i<20){

		$listavalor = rand(1, 5);

			if($listavalor == 3){
				$a++;
			}
			echo ($listavalor);
			echo("<br>");
			$i++;
		}
		echo("Quantos 3 existem? Existem ". $a);

		echo("<br>"."<br>"."<br>");

	//versão 2
	$i=0;
	$a=0;
	while($i<20){

		$listavalor = array(0=> rand(1, 5), 1=>rand(1, 5), 2=>rand(1, 5), 3=>rand(1, 5), 4=>rand(1, 5), 5=>rand(1, 5), 6=>rand(1, 5), 7=>rand(1, 5), 8=>rand(1, 5), 9 =>rand(1, 5), 10 =>rand(1, 5), 11 =>rand(1, 5), 12 =>rand(1, 5), 13 =>rand(1, 5), 14 =>rand(1, 5), 15 =>rand(1, 5), 16 =>rand(1, 5), 17 =>rand(1, 5), 18 =>rand(1, 5), 19 =>rand(1, 5));

			if($listavalor[$i] == 3){
				$a++;
			}
			echo ($listavalor[$i]);
			echo("<br>");
			$i++;
		}
		echo("Quantos 3 existem? Existem ". $a);

?>