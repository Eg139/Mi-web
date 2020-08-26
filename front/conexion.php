<?php
$mysqli = new mysqli("localhost", "root","","sistema");

/* verificar la conexión */
if ($mysqli->connect_errno) {
    printf("Conexión fallida: %s\n", $mysqli->connect_error);
    exit();
}


/*	if ($resultado = $mysqli->query($consulta)) {

    /* obtener un array asociativo */
  /*  while ($fila = $resultado->fetch_assoc()) {
        printf ("%s (%s)\n", $fila["titulo"], $fila["fecha_inicio"], $fila["fecha_fin"], $fila["fk_pais"], $fila["precio"], $fila["dias"], $fila["noches"], $fila["itinerario"]);
    }


     #liberar el conjunto de resultados 
    //$resultado->free();
}
/*function conectar(){
	$user="root";
	$pass="";
	$server="localhost";
	$db="sistema";
	$con=mysqli_connect($localhost,$user,"",$db) or die ("error al conectar a la base de datos");
	return $con;
}

/* cerrar la conexión */
//$mysqli->close();
?>