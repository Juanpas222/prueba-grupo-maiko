
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
		<span><h3>Ingreso</h3></span>

<hr>
      <center><form>
        <span>Usuario:</span><br>
		<input type="text" name="usuario"><br><br>
		<span>contraseña:</span><br>
		<input type="text" name="contrasena"><br><br>
		<button type="summit">Ingresar</button>
      </form>
      
<a href="prueba2crea.php">Crear Usuario</a><br>
<a href="prueba3recuerda.php">Olvide mi contraseña</a>
</center>
	</div>
</div>


<?php 

$varu = $_POST['usuario'];
$varc = $_POST['clave'];


$consulta = mysqli_query ($conexion, "SELECT * FROM usuarios WHERE email = '$varu' AND clave = '$varc'");  

if(!$consulta){ 
 echo "Usuario no existe " . $varu . " " . $vare. " o hubo un error " . mysqli_error($mysqli);
} 
else{ 
print "Bienvenido"."<script> window.location='prueba4lista.php'; </script>"; 
} 
?>

<?php 

mysqli_close($conexion);
?>
</body>
</html>
