<?php
include_once ("db.php");
/**
 *
 */
class pedidos extends db
{

  function __construct()
  {
    parent::__construct()
  }
  public function crearPedido($nombre,$apellidos,$talla,$numero,$precio,$sexo){
    if($this->getErrorConexion()==false){
      $sqlInsercion="INSERT INTO pedidos(id,nombre,apellidos,talla,numero,sexo,precio) Values(NULL,'".$nombre."','".$apellidos."','".$talla."','".$numero."','".$sexo."','".$precio."')";
      $this->conexion->query($sqlInsercion);
      $sql="SELECT * FROM pedidos ORDER BY id  DESC LIMIT 1 ";
      return $resultado=$this->realizarConsulta($sql);
    }else{
      return null;
    }
    }
    public function listaPedido(){
      if($this->getErrorConexion()==false){
      $sql="SELECT * FROM pedidos";
      return  $resultado=$this->realizarConsulta($sql);
      }else{
        return null;
      }
    }
}



 ?>
