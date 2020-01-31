<?php
	include 'contatos.class.php';
	$contato = new Contato();
?>
<h1>Contatos</h1>

<a href="adicionar.php">Adicionar</a><br><br>

<table border="1" width="600">
	<tr>
		<td>ID</td>
		<td>Nome</td>
		<td>Email</td>
		<td>Ações</td>
	</tr>
	<?php
		$lista = $contato->getAll();
		foreach ($lista as $item):
	?>
		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['nome']; ?></td>
			<td><?php echo $item['email']; ?></td>
			<td>
				<a href="editar.php?email=<?php echo $item['email']; ?>">[Editar]</a>
				<a href="excluir.php?email=<?php echo $item['email']; ?>">[Excluir]</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>