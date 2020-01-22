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
	.corpo {
		height: 200px;
		width: 598px;
		font-family: Arial;
		margin: auto;
		border: 1px solid gray;
	}
	.corpo form {
		text-align: center;
		padding-top: 40px;
	}
</style>

<div class="topo">
	<h1>Adicionar</h1>
</div>

<div class="corpo">
	<form method="POST" action="adicionador_submit.php">
		Nome:<br><br>
		<input type="text" name="nome"><br><br>
		<input type="submit" value="Adicionar">
	</form>
</div>