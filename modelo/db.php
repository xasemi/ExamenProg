<?php
  class db{
    //-- Variables de Identificacion --\\
    private $host="localhost";
    private $user="root";
    private $pass="root";
    private $db_name="camisetavlcbasket";

    protected $conexion;

    private $error=false;
    private $error_msj="";

    function __construct(){
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno){
        $this->error=true;
      }
    }

    public function getErrorConexion(){
      return $this->error;
    }
    function msjError(){
    return $this->error_msj;
  }

  public function realizarConsulta($consulta){
    if($this->error==false){
      return $resultado = $this->conexion->query($consulta);
    }else{
      $this->error_msj="Imposible realizar la consulta: ".$consulta;
      return null;
    }
  }


  public function getDbName(){
      return $this->db_name;
  }
  public function setDbName($db_name){
      $this->db_name = $db_name;
  }
}
?>
