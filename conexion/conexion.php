
<?php 

class AccesoDatos {
    public $con;

    public function conexion(){
        $this->con = new MySQLi('localhost','root','','molinet1');

        if ($this->con->connect_errno){
            die ("ERROR DE CONEXION: ".$this->con->connect_error);
        }
    }

    public function desconexion(){

        $this->con->close();
    }
}

?>