<?php
    class meses2{

        private $meses;

        public function darValores(){
            $this->meses = array(
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo");
        }

        public function mostrar(){
            print_r($this->meses);

        }
}

$objMeses = new meses2();
$objMeses ->darValores();
$objMeses ->mostrar();
