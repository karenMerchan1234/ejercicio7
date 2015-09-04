!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 7 </title>
</head>

<body>

            <!-- Solicitar al usuario el total de kilómetros que recorre su automóvil si con un litro se recorre 16.4 kilómetros, y desplegar cuantos litros de gasolina gastará, redondear el resultado para que no muestre decimales.  -->
			
			
			<form action="Desarrollo_07.php" method="POST">
		 Ingrese cantidad de kilometros:<br>
  		<input type="text" name="kilometros" id="kilometros" value="0">
  		<input type="submit" value="Enviar">
	</form>
                        
                          
  
  <?php
       if (isset($_POST['txtKm'])){
               $total=$_POST['txtKm'];
                       $litrosg=16.4;
                          $consume=0;
						  $consume=$total/$litrosg;

echo "El total de los litros que consume es: ".  round ($consume) ." litro(s)";
 }
?>
        
        </body>
</html>

