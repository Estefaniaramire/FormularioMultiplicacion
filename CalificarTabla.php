<! DOCTYPE html>
<.html>
<cabeza>
<título>Calificacion
</título>
<link href="EstiloS.css" rel="stylesheet" 
    crossorigin="anónimo">  
</cabeza>
<cuerpo>

<table class="table table-hover ">
  <Cabeza>
    <Tr>
      <th>Operación</th>
      <th>Resultado</th>
      <th>Calificación</th>
    </Tr>
  </Cabeza>
  <tbody>
    <?php
    
      $puntos = 0;
      $contador = $_GET["tabla"];
 para ($i = 1; $i <= 10; $i++) 
      {
        $calificar = $_GET["resultado". $i];
        $multiplicacion = $contador * $i;
        if ($calificar == $multiplicacion) 
        {
          echo '<tr class="table-success">';
          echo '<td>'. $contador. ' x '. $i. «</td>»;
          echo '<td>'. $calificar. «</td>»;
          echo '<td><span style="color:green">Correcto</span></td>';
          $puntos++;
          
        }
        más 
        {
          echo '<tr class="table-danger">';
          echo '<td>'. $contador. ' x '. $i. «</td>»;
          echo '<td>'. $calificar. «</td>»;
          echo '<td><span style="color:red">Incorrecto</span></td>';
        }
        echo '</tr>';
      }
      eco '<tr>
              <td colspan="2">Resultado:</td>
 <td>'. $puntos. ' de 10</td>
            </tr>';
    ?>
  </tbody>
</mesa>

</cuerpo>
</.html>