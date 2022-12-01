<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $nombre = $_POST["evento"];
  print("<h2 align='center'>Ingresos por venta de entradas de $nombre </h2>
  ");
  $nombre = strtolower($nombre);
  #Se construye la consulta como un string
 	$query = "SELECT Ev.nombre, SUM(En.precio) as ingreso_total FROM Entradas as En, Evento as Ev, EventoEntrada as EvEn WHERE Ev.id_ev = EvEn.id_ev AND En.id_en = EvEn.id_en AND LOWER(Ev.nombre) = '$nombre' GROUP BY Ev.nombre;";
  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$ingresos = $result -> fetchAll();
  ?>

  <table align="center">
    <tr>
    <th>Nombre evento</th>
      <th>Ingresos</th>
    </tr>
  
      <?php
        // echo $pokemones;
        foreach ($ingresos as $p) {
          echo "<tr><td>$p[0]</td><td>$p[1]</td></tr>";
      }
      ?>
      
  </table>

<?php include('../templates/footer.html'); ?>

