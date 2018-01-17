<?php

include '../extend/header.php';

require_once ("../conexion/conexion.php");
require_once ("../model/Producto.php");
require_once ("../conexion/DaoProducto.php");

$daoPro = new DaoProducto();

#PREGUNTAMOS SI SE APRETÓ EL BOTON GUARDAR

if (isset($_REQUEST['guardar'])){
    $id = $_REQUEST['id'];
    $nom = $_REQUEST['nom'];
    $cat = $_REQUEST['cat'];
    $des = $_REQUEST['des'];
    $stk = $_REQUEST['stk'];
    #$foto = $_REQUEST['foto'];
    $dis = $_REQUEST['dis'];
    $agregado = 'DEFAULT';

    $extension = '';//Declaramos la varaible para guardar la extension de la imagen de perfil
	$ruta = 'fotos/'; //Ruta
	$archivo = $_FILES['foto']['tmp_name']; //[NombreArchivoEnElFormulario][NameTemporal]
	$nombreArchivo = $_FILES['foto']['name']; //[NombreArchivoEnElFormulario][Name]
	$info = pathinfo($nombreArchivo); // algo asi como un PWD

	if($archivo != ''){
		//1ro conseguir la extension del archivo, aca especificamos si cumple la extension con alguna de las permitidas.
		$extension = $info['extension'];
		//Preguntamos si pertenece a png,jpg o jpeg.
		if($extension == "png" || $extension == "PNG" || $extension == "jpg" || $extension == "JPG" || $extension == "JPEG" || $extension == "jpeg"){
			move_uploaded_file($archivo, $ruta.$id.'.'.$extension); // RUTA A GUARDAR(archivoEnCuestion, ruta + id + extension)
			$ruta = $ruta.$id.'.'.$extension;
		}else{
			echo "El formato No es válido!";
		}
	}else{
		//En caso de que el archivo venga vacio
		$ruta = $ruta."logo.jpg";
	}

	
	$pro = new Producto($id,$nom,$cat,$des,$stk,$ruta,$dis,$agregado);
	
	$daoPro->agregarProducto($pro);
}

?>
<div class="container">
  <div class="row">
    <div class="col s12 m12 l12">
      <form enctype="multipart/form-data" action='agregar.php' method='post'>
      <br>
      <h4>FORMULARIO PARA AGREGAR PRODUCTOS</h4>
      <fieldset class="center-align ">

        <form action="PATH" method="get/post" enctype="multipart/form-data">
          <div class="input-field col s12 l6">
            <input type="text" id="id" name="id" class="validate" required>
            <label for="id">ID</label>
          </div>
          <div class="input-field col s12 l6">
            <input type="text" id="nom" name="nom" class="validate" required>
            <label for="nom">Nombre</label>
          </div>
          <div class="input-field col s12 l6">
            <input type="text" id="cat"  name="cat"  class="validate" required>
            <label for="cat" >Catergoría</label>
          </div>
          <div class="input-field col s12 l6">
            <input id="des" id="des" name="des" class="validate" required>
            <label for="des">Descripción</label>
          </div>
          <div class="input-field col s12 l6">
            <input type="number" id="stk" name="stk" class="validate" required>
            <label for="stk">Stock</label>
          </div>

            <div class="radios left-align">
            <p>
                <input name="dis" type="radio" id="test1" value="1" checked/>
                <label for="test1">Disponible</label>
            </p>
            <p>
                <input name="dis" type="radio" id="test2" value="0" />
                <label for="test2">No disponible</label>
            </p>
            </div>

          <div class="file-field input-field col 12 ">
            <div class="btn left-align">
                        <span>Foto:</span>
                        <input type="file" name="foto" title="FORMATOS ACEPTADOS: .png, .jpeg y .jpg.">
            </div>
            <div class="file-path-wrapper">
                    <div class="input-field">
                      <input type="text" class="file-path validate" title="FORMATOS ACEPTADOS: .png, .jpeg y .jpg.">
                    </div>
            </div>
            </div>
          <div class="input-field col s12">
          <button id="guardar" name="guardar" type="submit" class="btn">Guardar <i class="material-icons small">send</i></button>
            </div>
        </form>
      </fieldset>
      </form>
    </div>
  </div>
</div>
<?php

include '../extend/footer.php';

?>