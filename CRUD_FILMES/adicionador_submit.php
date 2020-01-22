<?php
	require 'filmes.class.php';
	$filme = new Filme();

	if (!empty($_POST['nome'])) {
		$nome = $_POST['nome'];

		$filme->adicionar($nome);
		header("Location: index.php");
	}
?>