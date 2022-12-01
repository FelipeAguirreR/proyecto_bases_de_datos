<?php include('templates/header.html');   ?>

<body>
  <h1 align="center">ChechoWiwi </h1>
  <br>
  <div class='container'>
    <br>

    <h4 align="center"> Aqui puedes ver la información de todas las productoras</h4>

    <form align="center" action="consultas/consulta_info_productoras.php" method="post">
      <input type="submit" value="ver">
    </form>
    
    <br>
    <br>
    <br>
  </div>
  <br>

  <div class='container'>
    <h4 align="center"> Aqui puedes ver la cantidad de eventos realizados por cada productora</h4>

    <form align="center" action="consultas/consulta_eventos_productoras.php" method="post">

      <input type="submit" value="ver">
    </form>
    
    <br>
    <br>
    <br>
  </div>
  <br>
  

  <div class='container'>
    <h4 align="center"> ¿Quieres saber el ultimo evento realizado por una productora?</h4>

    <form align="center" action="consultas/consulta_ultimo_evento.php" method="post">
      Nombre productora:
      <input type="text" name="productora">
      <br/><br/>
      <input type="submit" value="Buscar">
    </form>
    
    <br>
    <br>
    <br>
  </div>
  <br>
  <div class='container'>
    <h4 align="center">¿Quieres saber todos los artistas que han trabajado con una productora?</h4>


    <form align="center" action="consultas/consulta_productora_artistas.php" method="post">
      Nombre productora:
      <input type="text" name="productora">
      <br/><br/>
      <input type="submit" value="Buscar">
    </form>
    <br>
    <br>
    <br>
  </div>
  <br>

  <div class='container'>
    <h4 align="center">¿Quieres saber el total de ingresos por entradas de un evento?</h4>


    <form align="center" action="consultas/consulta_ingresos_evento.php" method="post">
      Nombre evento:
      <input type="text" name="evento">
      <br/><br/>
      <input type="submit" value="Buscar">
    </form>
    <br>
    <br>
    <br>
  </div>
  <br>

  <div class='container'>
    <h4 align="center"> Aqui puedes ver la cantidad de Artistas que se presentaran en cada evento</h4>

    <form align="center" action="consultas/consulta_eventos_artistas.php" method="post">

      <input type="submit" value="ver">
    </form>
    <br>
    <br>
    <br>
  </div>
  <br>


  <div class='container'>
    <h4 align="center"> Evento con mayor cantidad de entradas vendidas:</h4>

    <form align="center" action="consultas/consulta_evento_venta_mayor.php" method="post">

      <input type="submit" value="ver">
    </form>
    <br>
    <br>
    <br>
  </div>
  <br>
</body>
</html>
