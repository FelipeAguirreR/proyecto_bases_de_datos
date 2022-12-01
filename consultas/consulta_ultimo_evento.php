<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  #Se obtiene el valor del input del usuario
  $nombre = $_POST["productora"];
  print("<h2>Ultimo Evento de $nombre </h2>");
  $nombre = strtolower($nombre);
  #Se construye la consulta como un string
 	$query = "SELECT E.nombre as nombre, E.fecha_inicio as fecha_inicio, E.fecha_termino FROM Evento as E, Productoras as P, ProductoraEvento as PE WHERE P.id_p = PE.id_p AND E.id_ev = PE.id_ev AND LOWER(P.nombre) = '$nombre' AND E.fecha_termino = (SELECT MAX(E.fecha_termino) FROM Evento as E, Productoras as P, ProductoraEvento as PE WHERE P.id_p = PE.id_p AND E.id_ev = PE.id_ev AND LOWER(P.nombre) = '$nombre');";
  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$productoras = $result -> fetchAll();
  ?>

  <table align="center">
    <tr>
      <th>Nombre Evento</th>
      <th>fecha inicio</th>
      <th>fecha termino</th>
    </tr>
  
      <?php
        // echo $pokemones;
        foreach ($productoras as $p) {
          echo "<tr><td>$p[0]</td><td>$p[1]</td><td>$p[2]</td></tr>";
      }
      ?>
      
  </table>

<?php include('../templates/footer.html'); ?>
