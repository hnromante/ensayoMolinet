<?php 

class Producto {

    private $id;
    private $nom;
    private $cat;
    private $des;
    private $stk;
    private $img;
    private $dis;
    private $agregado;


    public function Producto($id,$nom,$cat,$des,$stk,$img,$dis,$agregado){
        $this->id = $id;
        $this->nom = $nom;
        $this->cat = $cat;
        $this->des = $des;
        $this->stk = $stk;
        $this->img = $img;
        $this->dis = $dis;
        $this->agregado = $agregado;
    }

    public function getId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getCat(){
        return $this->cat;
    }

    public function getDes(){
        return $this->des;

    }

    public function getStk(){
        return $this->stk;
    }

    public function getImg(){
        return $this->img;
    }

    public function getDis(){
        return $this->dis;
    }
    public function getAgregado(){
        return $this->agregado;
    }
}

?>