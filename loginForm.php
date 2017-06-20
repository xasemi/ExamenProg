<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <form class="" action="login.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="" required><br><br>

        <label for="abonado">Numero de Abonado:</label>
        <input type="text" name="abonado" value="" required><br><br>

        <input type="hidden" name="accion" value="login">
        <input type="submit" name="" value="Enviar">
      </form>
  </body>
</html>
