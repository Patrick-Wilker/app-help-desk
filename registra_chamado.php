<?php  
	
	session_start();

	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

	$texto = $_SESSION['id'] . '#'.$titulo .'#'. $categoria .'#'. $descricao . PHP_EOL;

	$arquivo = fopen('arquivo.hd', 'a'); //abrir o arquivo e coloquei ele como ele na variavel como referencia

	fwrite($arquivo, $texto); //escrevendo no arquivo, por esta usando a funcao 'a' sera adicionado toda vez ao final

	fclose($arquivo); //fechando o arquivo aberto

	//echo "$texto";

	header('Location: abrir_chamado.php');

?>