<?php include('../templates/header.html');   ?>

<body>
<h2 align="center">Eventos por productora </h2>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

 	$query = "SELECT Productoras.nombre as nombre_productora, COUNT(ProductoraEvento.id_p) as cantidad_eventos FROM Productoras, ProductoraEvento WHERE Productoras.id_p = ProductoraEvento.id_p GROUP BY Productoras.nombre;";
	$result = $db -> prepare($query);
	$result -> execute();
	$productoras = $result -> fetchAll();
  ?>

	<table align="center">
    <tr>
      <th>Nombre</th>
      <th>cantidad eventos</th>
    </tr>
  <?php
	foreach ($productoras as $productora) {
  		echo "<tr> <td>$productora[0]</td> <td>$productora[1]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
