<?php

    class meses3{

        private $meses;
        
        
        private function darValor(){
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

    $objMeses = new meses3();
    $objMeses ->mostrar();