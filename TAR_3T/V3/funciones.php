<?php

    class Formulario{

        //creamos el metodo cogerDatos()
        function cogerDatos(){
            //ahora creamos el array de alta
            $alta['categoria'] = $_POST['categoria'];

            //Comprobamos que la actividad no está vacia
            if(empty($_POST['nombre'])){
                echo 'El campo actividad debe ser rellenado'.'<br>';
            }else{
                $alta['nactividad'] = $_POST['nombre'];
            }

            //Ahora comprobamos que existan etapas
            if(isset($_POST['etapas'])){
                //lo recorremos con un foreach
                foreach($_POST['etapas'] as $valor){
                    $alta[] = $valor;
                    }
                }else{
                    echo 'Se tiene que seleccionar etapas'.'<br>';
            }

            //Comprobamos si se ha seleccionado el radio
            if(isset($_POST['actividad'])){
                $alta['seccion'] = $_POST['actividad'];
            }else{
                $alta['seccion'] = 'Actividad para alumnos';
            }
            
            return $alta;
        }

        //Creamos el metodo visualizarDatos()
        function visualizarDatos($alta){
            foreach($alta as $valor){
                echo "$valor<br>";
            }
        }
    }