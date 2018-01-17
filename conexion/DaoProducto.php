
<?php 
    
    class DaoProducto extends AccesoDatos {

        public function obtenerProductos(){
            $this->conexion();

            $lista = array();

            $sql = "SELECT * FROM productos";

            $st = $this->con->query($sql);

            while ($rs = $st->fetch_array(MYSQL_BOTH)){
                $id = $rs['id'];
                $nom = $rs['nom'];
                $cat = $rs['cat'];
                $des = $rs['des'];
                $stk = $rs['stk'];
                $img = $rs['img'];
                $dis = $rs['dis'];
                $agregado = $rs['agregado'];

                $p = new Producto($id,$nom,$cat,$des,$stk,$img,$dis,$agregado);

                $lista[] = $p;

            }
            $this->desconexion();
            return $lista;
        }

        public function consultarProducto($id){
            $this->conexion();
            $sql = "SELECT * FROM productos WHERE id='$id";
            $st = $this->con->query($sql);
            if($rs = $st->fetch_array(MYSQL_BOTH)){
                $id = $rs['id'];
                $nom = $rs['nom'];
                $cat = $rs['cat'];
                $des = $rs['des'];
                $stk = $rs['stk'];
                $img = $rs['img'];
                $dis = $rs['dis'];
                $agregado = $rs['agregado'];

                $p = new Prodcuto($id,$nom,$cat,$des,$stk,$img,$dis,$agregado);
                $this->desconexion();
                return $p;
            }else{
                $this->desconexion();
                return 0;
            }
        }

        public function agregarProducto ($p){
            $this->conexion();

            $id = $p->getId();
            $nom = $p->getNom();
            $cat = $p->getCat();
            $des = $p->getDes();
            $stk = $p->getStk();
            $img = $p->getImg();
            $dis = $p->getDis();
            $agregado = $p->getAgregado();

            $sql = "INSERT INTO productos VALUES ($id,'$nom','$cat','$des','$stk','$img','$dis',DEFAULT)";

            $st = $this->con->query($sql);

            if ($this->con->affected_rows > 0){
                echo "<center><h3>Se ha agregado el producto correctamente</h3></center>";
            }else{
                echo "<center><h3>No se ha podido agregar el producto</h3></center>";
            }
            $this->desconexion();
        }

        public function modificarProducto($p){
            $this->conexion();

            $id = $p->getId();
            $nom = $p->getNom();
            $cat = $p->getCat();
            $des = $p->getDes();
            $stk = $p->getStk();
            $img = $p->getImg();
            $dis = $p->getDis();
            $agregado = $p->getAgregado();

            $sql = "UPDATE productos SET nom='$nom', cat='$cat', des='$des',stk='$stk',img='$img',dis='$dis' WHERE id='$id' ";

            $st = $this->con->query($sql);
            
            if ($this->con->affected_rows > 0 ){
                echo "<center><h3>Se ha modificado el producto correctamente</h3></center>";
            }else{
                echo "<center><h3>No se ha podido modificar el producto</h3></center>";
            }

            $this->desconexion();
        }

        public function cambiarEstado ($id){
            $this->conexion();

            $pro = $this->consultarProducto($id);
            $this->conexion();
            $disponible = $pro->getDis();
            $sql = '';

            if ($disponible){
                $sql = "UPDATE productos SET dis=0  WHERE id='$id'";

            }else{
                $sql = "UPDATE productos SET dis=1 WHERE id='$id'";
            }
            $st = $this->con->quedy($sql);

            if($this->con->affected_rows > 0 ){
                echo "<center><h3>Se modifico la disponibilidad.</h3></center>";
            }else {
                echo "<center><h3>Se cambio la disponibilidad.</h3></center>";
            }

            $this->desconexion();
        }
    }

?>