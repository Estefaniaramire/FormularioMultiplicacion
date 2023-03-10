<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tablas de multiplicar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
    crossorigin="anonymous">
    
   <img class= "image">
    <link href="EstiloS.css" rel="stylesheet">
  </head>

<body>  
    <form action="calificar.php" method="get">
    <?php
$tabla = $_GET["tabla"];
$inicio = $_GET["inicio"];
$fin = $_GET["fin"];

if ($tabla < 1 || $tabla > 10 || $inicio < 1 || $inicio > 10 || $fin < 1 || $fin > 10 || $inicio > $fin) {
  echo '<p>Los valores ingresados no son válidos.</p>';
  exit();
}
?>
    <?php
      $tabla = $_GET["tabla"];
      $inicio = $_GET["inicio"];
      $fin = $_GET["fin"];
      $inputs_por_fila = 3;
      $num_inputs = $fin - $inicio + 1;
      $num_filas = ceil($num_inputs / $inputs_por_fila);

      echo '<input type="hidden" id="tabla" name="tabla" value="'.$tabla.'">';
      echo '<input type="hidden" id="inicio" name="inicio" value="'.$inicio.'">';
      echo '<input type="hidden" id="fin" name="fin" value="'.$fin.'">';

      for ($fila = 0; $fila < $num_filas; $fila++) {
        echo '<div class="row">';
        for ($i = 0; $i < $inputs_por_fila; $i++) {
          $indice = $fila * $inputs_por_fila + $i;
          if ($indice < $num_inputs) {
            $valor = $inicio + $indice;
            echo '<div class="col"><label for="pregunta">'.$tabla.'x'.$valor.':</label>';
            echo '<input type="text" id="resultado'.$valor.'" name="resultado'.$valor.'" value="" class="form-control"></div>';
          }
        }
        echo '</div>';
      }
    ?>
     
    
      <br><input class="btn btn-outline-dark" type="submit" style="--bs-btn-padding-y: .40rem; --bs-btn-padding-x: 4.5rem; --bs-btn-font-size: 1.5rem;" value="Calcular">
  </form>
  </body>