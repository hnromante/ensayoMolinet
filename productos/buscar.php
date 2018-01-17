<?php

include '../extend/header.php';

?>
<br>
<div style="margin-top:3%; margin-left:5%" class="row">
    <div class="col s12 m12 l6 align-center offset-l4">
        <form method="GET" action="index.php">
        <div class="input-field col s6 m6 l4">
            <input type="text" id="buscar"  name="buscar">
                <label for="buscar">Palabra clave</label>
        </div>
        <div class="input-field col s6 m6 l4">
            
            <button name="btn_filtrar" id="btn_filtrar" type="submit" class="btn"><i class="material-icons">search</i></button>
        </div>
        </form>
    </div>
</div>
<hr>
<div class="container">
  <div class="row">
    <div class="col s12 m6 l4">
      <img src="../img/logo.jpg" width="100%" style="margin-top:10%;" alt="">
    </div>
    <div class="col s12 m6 l8">
        <ul class="collection with-header">
            <li class="collection-header"><h4>Producto 1</h4></li>
            <li class="collection-item">Id: </li>
            <li class="collection-item">Categoría: </li>
            <li class="collection-item">Descripción: </li>
            <li class="collection-item">Stock: </li>
            <li class="collection-item">Disponible: </li>
            <li class="collection-item">Agregado el: </li>
        </ul>
    </div>
  </div>
</div>
<?php

include '../extend/footer.php';

?>