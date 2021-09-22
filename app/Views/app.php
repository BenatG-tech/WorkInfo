<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<link href="styles/inicio.css" rel="stylesheet">

</head>
<body>

<header>
	<h1>~ WORK INFO ~</h1>
	<div class="menu_principal">
		<form action="calendario" method="post">
			<button class="boton_menu_principal" name="calendario">Calendario</button>
		</form type="submit">
		<form action="registroDiario" method="post">
			<button class="boton_menu_principal" name="calendario">Registro de Horas</button>
		</form type="submit">
		<form action="contador" method="post">
			<button class="boton_menu_principal" name="calendario">Contador</button>
		</form type="submit">
	</div>
</header>

<?= $this->renderSection('content') ?>

<footer>
	<div>
	</div>
</footer>

</body>
</html>
