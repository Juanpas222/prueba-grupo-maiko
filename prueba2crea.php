<html>
<head>
	<title>prueba</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

<?php 

$usuario = "root";
$contrasena = "";
$servidor = "localhost";
$basededatos = "prueba_bd";

$conexion = mysqli_connect( $servidor, $usuario, $contrasena,$basededatos);

if (!$conexion) {
    die("erro: " . mysqli_connect_error());
}
echo "conectado";


?>


<div class="container">

	<div class="container">

		<span><h3>Registro de usuario</h3></span>

<hr>
        <center><form action="" method="post">
        <span>Nombre:</span><br>
		<input type="text" name="nombre"><br>
		<span>Apellido:</span><br>
		<input type="text" name="apellido"><br>
		<span>E-Mail:</span><br>
		<input type="text" name="mail"><br>
		<span>ciudad:</span><br>
		<select name="rol">
<option value="-1">Seleccionar</option>
<option value=""></option>
</select><br>
		<span>Rol:</span><br>
		<select name="rol">
<option value="-1">Seleccionar</option>
<option value="Administrador">Administrador</option>
<option value="usuario">Usuario</option>
</select><br>
		<span>Contraseña:</span><br>
		<input type="text" name="clave"><br><br>
		<button type="summit">Registrar</button>
      </form></center>
	</div>
</div>

<?php

$varn= $_POST['nombre'];
$vara= $_POST['apellido'];
$vare= $_POST['mail'];
$varc= $_POST['ciudad'];
$varr= $_POST['rol'];
$varco= $_POST['clave'];

$insertar = "INSERTs INTO usuarios (nombre,apellido,email,ciudad, clave, rol)
             VALUES('$varn', '$vara', '$vare','$varc', '$varr', '$varco')";

             if(mysqli_query($conexion,$insertar)){

             	echo "registado correctamente";
             }else{
             	echo "error de registro" . mysqli_error($conexion);
             }


?>

<?php 

mysqli_close($conexion);
?>

</body>
</html>