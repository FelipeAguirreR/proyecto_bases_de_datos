<?php include('../templates/header.html');   ?>

<body>
<h2 align="center">Cantidad de Artistas por Evento </h2>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

 	$query = "SELECT E.nombre as nombre_eventos, COUNT(AE.id_a) as cantidad_artistas FROM ArtistaEvento as AE, Evento as E WHERE E.id_ev = AE.id_ev GROUP BY E.nombre;";
	$result = $db -> prepare($query);
	$result -> execute();
	$productoras = $result -> fetchAll();
  ?>

	<table align="center">
    <tr>
      <th>Nombre Evento</th>
      <th>total de Artistas</th>
    </tr>
  <?php
	foreach ($productoras as $productora) {
  		echo "<tr> <td>$productora[0]</td> <td>$productora[1]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
