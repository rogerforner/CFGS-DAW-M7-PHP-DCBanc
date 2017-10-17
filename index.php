<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calcular DC bancario</title>

  <style media="screen">
    table {
      border-spacing: 7px;
    }
    th, td {
      padding: 2px;
      text-align: center;
    }
    form {
      width: 310px;
    }
    input.enviar {
      margin-top: 15px;
      width: 100%;
    }
  </style>
</head>
<body>
  <h1>Calcular DC bancario</h1>

  <form name="formulario" action="calcular.php" method="post">
    <!-- Campos -->
    <table>
      <tr>
        <th>Entidad</th>
        <th>Oficina</th>
        <th>D.C.</th>
        <th>Nº de Cuenta</th>
      </tr>
      <tr>
        <td><input
          type="text"
          name="entidad" value=""
          size="4" maxlength="4"></li></td>
        <td><input
          type="text"
          name="oficina" value=""
          size="4" maxlength="4"></li></td>
        <td>¿?</td>
        <td><input
          type="text"
          name="cuenta" value=""
          size="10" maxlength="10"></li></td>
      </tr>
    </table>
    <!-- Enviar -->
    <input type="submit" value="calcular" class="enviar">
  </form>

</body>
</html>
