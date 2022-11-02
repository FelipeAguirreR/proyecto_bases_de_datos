<?php include('../templates/header.html');   ?>

<body>
<h2 align="center">Productoras </h2>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

 	$query = "SELECT id_p, nombre, telefono FROM Productoras";
	$result = $db -> prepare($query);
	$result -> execute();
	$productoras = $result -> fetchAll();
  ?>

	<table>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Telefono</th>
    </tr>
  <?php
	foreach ($productoras as $productora) {
  		echo "<tr> <td>$productora[0]</td> <td>$productora[1]</td> <td>$productora[2]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
