<?php include('../templates/header.html');   ?>

<body>
<h2 align="center"> Evento con mayor cantidad de entradas vendidas</h2>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

 	$query = "SELECT Ev.nombre FROM Entradas as En, Evento as Ev, EventoEntrada as EvEn WHERE Ev.id_ev = EvEn.id_ev AND En.id_en = EvEn.id_en AND Ev.id_ev = (SELECT foo2.id_ev FROM (SELECT EvEn.id_ev as id_ev, COUNT(EvEn.id_en) as cant_en FROM EventoEntrada as EvEn GROUP BY EvEn.id_ev) as foo2 WHERE foo2.cant_en = (SELECT MAX(foo.cant_en) FROM (SELECT EvEn.id_ev as id_ev, COUNT(EvEn.id_en) as cant_en FROM EventoEntrada as EvEn GROUP BY EvEn.id_ev) as foo)) GROUP BY Ev.nombre;";
	$result = $db -> prepare($query);
	$result -> execute();
	$productoras = $result -> fetchAll();
  ?>

	<table align="center">
    <tr>
      <th>Nombre Evento</th>
    </tr>
  <?php
	foreach ($productoras as $productora) {
  		echo "<tr> <td>$productora[0]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
