<?php

	session_start();

	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

	$arquivo = fopen('../../../arquivos_seguros_app/arquivo.hd', 'a');
	
	$quebra_linha = PHP_EOL;

	$texto = "{$_SESSION['id']} # {$titulo} # {$categoria} # {$descricao} {$quebra_linha}";

	fwrite($arquivo, $texto);

	fclose($arquivo);

	header('Location: ./pages/chamada.php');

?>