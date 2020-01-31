<?php
	include 'contatos.class.php';
	$contato = new Contato();

	if (!empty($_GET['email'])) {
		$email = $_GET['email'];

		$contato->excluir($email);
	} 
		header("Location: index.php");
?>