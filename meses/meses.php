<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Meses del año</title>
  </head>
  <body>
    <?php
      //creacion del array
      $meses = array(
        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo");

        echo '<h2>Una prueba con print_r</h2>';
        //mostrar el array con un print
        print_r($meses);
   
        //mostrar el array con un foreach, enseñando el número y el nombre del mes
        echo '<h2>Con un foreach</h2>';
        echo '<table>';
			    echo '<tr>';
            echo '<th> Numero del mes </th>';
            echo '<th> Nombre del mes </th>';
		    	echo '</tr>';
			    foreach ($meses as $numMes => $nombre_mes) {
				  echo'<tr>';
					echo'<td>'.$numMes.'</td>';
					echo'<td>'.'<b>'.$nombre_mes.'</b>'.'</td>';
				echo '</tr>';
						}
		  echo '</table>';
        
        echo '<br>';

      //mostrar el array con un foreach abreviado, $nombre_mes es el valor de los elementos del array
      echo '<h2>Foreach abreviado</h2>';
      foreach($meses as $nombre_mes)
        echo $nombre_mes.'<br>';

      //mostrar los meses con sus respectivos dias con foreach
      echo '<h2>Dias del mes</h2>';

     $month = array(
       "Enero" => 31,
       "Febrero" => 28,
       "Marzo" => 31,
       "Abril" => 30,
       "Mayo" => 31  
     );

     echo '<table>';
      //mostrar el foreach completo, $dias seria el valor de los elementos del array, $numMes es el indice
        foreach ($month as $numMes => $dias){
          echo '<tr>';
            echo '<td>'.$numMes.'</td>';
            echo '<td>'.$dias.'</td>';
          echo '</tr>';  
        }
     echo '</table>';



    /* foreach($meses as $mes) */

        //Mostramos el array con un for
        echo '<h2>Con un for usando count</h2>';

        //Mostramos los elementos del array, desde 0 hasta el count -1, ya que nos mostraria un indice "5" que no existe
			  for($i=0; $i<=count($meses)-1; $i++){
				echo $meses[$i].'<br>';
		  }

      //Usamos el count
      echo '<h2>Con un count</h2>';

      //Mostramos el número de elementos del array
      echo count($meses);
      

      //Mostramos el mes mediante una función
      echo '<h1>Funciones</h1>';
      $mes= 1;
      function funcion($mes){
        switch ($mes) {
          case 1:
            echo 'Enero';
            break;
        }
      }
      funcion($mes);
    ?>
  </body>
</html>