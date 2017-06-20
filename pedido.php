<?php
if($_POST["accion"]=="registro"){
        if (!empty($_POST["nombre"]) && !empty($_POST["apellidos"]) && !empty($_POST["talla"]) && !empty($_POST["numero"])) {
          $resultado=$pedid->crearPedido($_POST["nombre"],$_POST["apellidos"],$_POST["talla"],$_POST["numero"],$_POST["precio"]);
            if($resultado!=null){
              echo "<h2 class='succes'>Pedido enviado correct</h2></bramente>";
              $resultado=$pedid->listaPedido($_POST["nombre"]);
              foreach ($resultado as  $fila) {
                echo "nombre : ".$fila["nombre"]."<br>";
                echo "apellidos : ".$fila["apellidos"]."<br>";
                echo "talla: ".$fila["talla"]."<br>";
                echo "numero : ".$fila["numero"]."<br>";
                echo "precio :".$fila["precio"]."<br>";

              }
              echo "<a href=pedidoForm.php>Regrese</a>";

            }else{
              //-- Usuario no insertado --\\
              echo "<h2 class='fail'>El pedido no ha sido insertado. Revisa los datos</h2></br>";
              echo "<a href=pedidoForm.php>Ves a Pedido</a>";
            }
          }
        }else{
          //Datos en blanco
          header('Location: pedidoForm.php');
        }

 ?>
