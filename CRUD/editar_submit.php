<?php
	include 'contatos.class.php';
	$contato = new Contato();

	if (!empty($_POST['email'])) {
		$nome = $_POST['nome'];
		$email = $_POST['email'];

		$contato->editar($nome, $email);
		header("Location: index.php");
	}
?>