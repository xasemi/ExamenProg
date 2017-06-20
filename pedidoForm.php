
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>examen</title>
  </head>
  <body>
    <form class="" action="pedido.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="" required><br><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" value="" required><br><br>

        <select name="talla">
          <option value="">Tallas</option><br>
          <?php
          foreach ($select as $fila) {
             ?>
            <option value="<?php echo $fila['talla'] ?>"><?php echo $fila['talla'] ?></option>
            <?php
          }
           ?>
        </select>

        <label for="numero">Numero de camiseta:</label>
        <input type="number" name="numero" value="" required><br><br>


        <input type="hidden" name="accion" value="registro">
        <input type="submit" name="" value="Enviar">
      </form>
  </body>
</html>
