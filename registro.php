<!DOCTYPE html>

<html>
	<head>
		<meta charset = "utf-8"/>
		<meta name = "viewport" content = "width=device-width"/>
		<link rel = "stylesheet" href = "css/registro.css"/>
	</head>

	<body>
		<div class = "pagina">
		<h2>Registro de usuarios</h2>
		</br>
		<p>El siguiente formulario sirve para registrarse en el sistema</p>
		</br>
		
		<div class = "formulario">
		<form method = "post">
			<legend>Formulario de registro</legend>
			<fieldset>
				<label for = "nombre">Nombre: </label>
				<input name = "nombre" type = "text"/>
				</br>
				<label for = "apellidoP">Apellido paterno: </label>
				<input name = "apellidoP" type = "text"/>
				</br>
				<label for = "apellidoM">Apellido materno: </label>
				<input name = "apellidoM" type = "text"/>
				</br>
				<label for = "telefono">Tel&eacute;fono: </label>
				<input name = "telefono" type = "text"/>
				</br>
				<label for = "contra">Contrase&ntilde;a: </label>
				<input name = "contra" type = "password"/>
			</fieldset>
		</form>
		</div>	
		<a href = "index.php">Inicio</a>
		</div>
	</body>
</html>
