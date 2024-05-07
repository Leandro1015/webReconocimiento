<?php
 
 //Conecta con la base de datos
 include 'conexion.php';
  
 //Insertar reconocimientos
echo "Filas insertadas:<br/>"; 
$sql="INSERT INTO reconocimiento (categoria,momento, descripcion,idAlumEnvia,idAlumRecibe)
      VALUES ('categoría1', 'momento1','ayuda en ..',1,3),
	         ('categoría2', 'momento2','estar ..',1,4),
			 ('categoría1', 'momento3','me gustó ..',2,3),
			 ('categoría2', 'momento4','sentirse ..',6,3);";
$resultado=$conexion->query($sql);	  
$conexion->close();     
