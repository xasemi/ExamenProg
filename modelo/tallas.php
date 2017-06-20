<?php
include_once ("db.php");
/**
 *
 */
class tallas extends db
{

  function __construct(argument)
  {
    parent::__construct()
  }

  public function listarTallas(){
        if($this->getErrorConexion()==false){
        $sql="SELECT  id,talla FROM tallas";
        return  $resultado=$this->realizarConsulta($sql);
        }else{
          return null;
        }
      }

}



 ?>
