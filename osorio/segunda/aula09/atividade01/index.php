<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade Prática 01 - Home</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h2>Cadastro de Aparelho Eletrônico</h2>

	<form action="cadastro.php" method="post">

		<p>
			<label>Nome do aparelho:</label><br>
			<input type="text" name="aparelho" required>
		</p>

		<p>
			<label>Consumo máximo em watts:</label><br>
			<input type="number" name="consumoMax" required required="1">
		</p>

		<p>
			<label>Quantas horas o aparelho fica ligado no dia?</label><br>
			<input type="number" name="horasDia" required min="0" max="24">
		</p>

		<p>
			<label>Quantos dias no mês o aparelho fica ligado?</label><br>
			<input type="number" name="diasMes" required min="0" max="31">
		</p>

		<p>
			<label>Valor do kilowatt-hora:</label><br>
			<input type="number" name="valorKwh" required min="0" step="0.01">
		</p>

		<p>
			<button type="submit" name="cadastrar">Cadastrar</button>
		</p>
		
	</form>


</body>
</html>
