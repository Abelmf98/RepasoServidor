<?php
    class pruebameses3{

        //Para esta prueba necesitamos poner el atributo a public
        public $meses;

        //Para llamar a este metodo desde el archivo externo lo tenemos que poner a public
        public function darValores(){
            $this->meses = array(
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo");
        }
}

$objMeses = new pruebameses3();