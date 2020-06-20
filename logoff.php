<?php  
	
	session_start();

	//echo '<pre>';
	//print_r($_SESSION);
	//echo '</pre>';

	//remover indices do array de sessao
	//unset()
	// unset($_SESSION['autenticado'])	


	//destruir a variavel de sessao
	//session_destroy()

	session_destroy();
	header('Location: index.php');
?>