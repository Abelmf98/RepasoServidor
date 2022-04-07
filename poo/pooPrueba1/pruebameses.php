<?php
    class pruebameses{

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

$objMeses = new pruebameses();