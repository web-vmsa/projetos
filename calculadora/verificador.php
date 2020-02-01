<?php
	if (isset($_GET['camp1']) && empty($_GET['camp1']) == false) {
		$campo1 = $_GET['camp1'];
		$campo2 = $_GET['camp2'];
		$opcao = $_GET['opcao'];

		if ($opcao == '+') {
			$resultado = $campo1 + $campo2;
			echo "RESULTADO: ".$resultado;
		}
		if ($opcao == '-') {
			$resultado = $campo1 - $campo2;
			echo "RESULTADO: ".$resultado;
		}
		if ($opcao == '*') {
			$resultado = $campo1 * $campo2;
			echo "RESULTADO: ".$resultado;
		}
		if ($opcao == '/') {
			$resultado = $campo1 + $campo2;
			echo "RESULTADO: ".$resultado;
		}
		if ($opcao == '%') {
			$resultado = $campo1 / 100 * $campo2;
			echo "RESULTADO: ".$resultado;
		}

	}
?>
<form method="GET">
	<input type="text" name="camp1">
	<select name="opcao">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
		<option value="%">%</option>
	</select>
	<input type="text" name="camp2">
	<input type="submit" value="Enviar"><br><br>
</form>