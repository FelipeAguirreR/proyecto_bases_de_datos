<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $nombre = $_POST["productora"];
  print("<h2 align='center'>Artistas que han trabajado con $nombre </h2>
  ");
  $nombre = strtolower($nombre);
  #Se construye la consulta como un string
 	$query = "SELECT A.nombre FROM Artistas as A, Productoras as P, Evento as E, ProductoraEvento as PE, ArtistaEvento as AE WHERE P.id_p = PE.id_p AND E.id_ev = PE. id_ev AND A.id_a = AE.id_a AND E.id_ev = AE. id_ev AND LOWER(P.nombre) = '$nombre';";
  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$productoras = $result -> fetchAll();
  ?>

  <table align="center">
    <tr>
      <th>Artistas</th>
    </tr>
  
      <?php
        // echo $pokemones;
        foreach ($productoras as $p) {
          echo "<tr><td>$p[0]</td></tr>";
      }
      ?>
      
  </table>

<?php include('../templates/footer.html'); ?>

