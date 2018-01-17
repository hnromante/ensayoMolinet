<?php

include '../extend/header.php';

require_once ('../conexion/conexion.php');
require_once ('../model/Producto.php');
require_once ('../conexion/DaoProducto.php');

$daoPro = new DaoProducto();

?>
<div class="container">
<h2>Productos agregados recientemente</h2>
</div>

<div class="container">
  <div class="row">

    <?php

$lista = $daoPro->obtenerProductos();

foreach($lista as $pro){

    echo '
    <div class="col s12 m4 l3">
    <div class="card horizontal">
      <div class="card-image">
        <img src="">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>'.$pro->getNom().'</p>
          <img width="150px" height="150px" src="'.$pro->getImg().'" alt="">
        </div>
        <div class="card-action">
          <a href="/molinet1/productos/buscar.php?id='.$pro->getId().'">Ver Detalles</a>
        </div>
      </div>
    </div>
  </div>';
}

?>
  </div>
</div>


<?php include '../extend/footer.php'; ?>