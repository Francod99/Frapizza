session_start();

  include ("conexion.php");
  <div class="album py-5 bg-light">

<div class="container">

  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

    <-?php

    $buscardor=mysqli_query($conexion,"SELECT * FROM articulos");

    while($resultado = mysqli_fetch_assoc($buscardor)){

    ?->

      <div class="col-4">

        <div class="card shadow-sm">

          <img src="img/<-?php echo $resultado["img"] ?->.jpg" alt="">

          <div class="card-body">

            <p class="card-text"><-?php echo $resultado["nombre"]; ?->p>

            <div class="d-flex justify-content-between align-items-center">

              <div class="btn-group">

                <button type="button" class="btn btn-sm btn-outline-secondary">Detallesbutton>

                <button type="submit" class="btn btn-sm btn-outline-secondary"  onclick=" envia_carrito($('#ref<-?php echo $resultado['id']; ?>').val(),$('#titulo<-?php echo $resultado['id']; ?>').val(),$('#precio<-?php echo $resultado['id']; ?->').val(),$('#cantidad<-?php echo $resultado['id']; ?->').val());">Añadir al carritobutton>

                <input name="ref" type="hidden" id="ref<-?php echo $resultado["id"]; ?->" value="<-?php echo $resultado["id"]; ?->" />                          

                <input name="precio" type="hidden" id="precio<-?php echo $resultado["id"]; ?>" value="<-?php echo $resultado["precio"]; ?->" />

                <input name="titulo" type="hidden" id="titulo<-?php echo $resultado["id"]; ?->" value="<-?php echo $resultado["nombre"]; ?->" />

                <input name="cantidad" type="hidden" id="cantidad<-?php echo $resultado["id"]; ?->" value="1" class="pl-2" />

              div>

              <small class="text-muted"><-?php echo $resultado["precio"]; ?->€small>

            div>

          div>

        div>

      div>

    <-?php } ?->

  div>

div>

div>
