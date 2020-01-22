<?php
	require 'filmes.class.php';
	$filme = new Filme();
?>
<style type="text/css">
	.topo {
		background-color: gray;
		color: white;
		height: 100px;
		width: 600px;
		line-height: 100px;
		text-align: center;
		font-family: Arial;
		margin: auto;
		border-top-left-radius: 20px;
		border-top-right-radius: 20px;
	}
	.topo h1 {
		margin: 0;
		padding: 0;
	}
	.tabela {
		margin: auto;
		width: 600px;
		border: 1px solid gray;
		text-align: center;
		font-family: Arial;
	}
</style>

<div class="topo">
	<h1>Filmes</h1>
</div>

<div class="corpo">
	<a style="margin-left: 377px; text-decoration: none; font-family: Arial; color: green;" href="adicionar.php">Adicionar</a>
	<table class="tabela">
		<tr>
			<th>ID</th>
			<th>NOME</th>
			<th>EXCLUIR</th>
		</tr>
	<?php
		$lista = $filme->todosFilmes();
		foreach ($lista as $item):
	?>
		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['nome']; ?></td>
			<td>
				<a style="color: red; text-decoration: none;" href="excluir.php?nome=<?php echo $item['nome']; ?>">Excluir</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
</div>