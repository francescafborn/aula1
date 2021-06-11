<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aula 02</title>
</head>
<body>

	<?php

	$idade = 17;
	$idade2 = 18;
	$altura = 1.65;
	$nome = "Francesca";
	$casado = false;

	$numero = 50;

	//variavel em minusculo, constante em MAIUSCULO

	define('CONFIG', 1500);
	echo CONFIG;

	function calc(){
		global $numero;
		echo $numero;
	}

	//calc();

	//$cadastro = array('Cliente 1', 'Cliente 2', 'Cliente 3');
	//var_dump($cadastro);
	//$cadastro[] = 'Cliente 1';
	//$cadastro[] = 'Cliente 2';
	//$cadastro = array('cliente1' => 'Ricardo', 'cliente2' => 'Zeca');
	$cadastro = array(
		'cliente1' => array(
			'nome' => 'ricardo',
			'idade' => 30, 
		),
		'cliente2' => array(
			'nome' => 'zeca',
			'idade' => 22, 
		),
	);

	//var_dump(get_defined_vars()); todas variaveies pré definidas tem o get constant

	//var_dump($cadastro);
	//echo $cadastro['cliente1']['nome'];


	/*
	print($idade);
	echo $nome;
	echo gettype($idade);
	echo $idade + $idade2;
	echo 'Olá, meu nome é .$nome e tenho .$idade', com aspas simples tem q ter o ponto antes de $;
	echo "Olá, meu nome é \"$nome\" e tenho $idade"; pra colovcar aspas na variavel tem q ter \" $ "\.

	*/
	//echo "Olá, meu nome é \"$nome\" e tenho $idade";
	?>

</body>
</html>

