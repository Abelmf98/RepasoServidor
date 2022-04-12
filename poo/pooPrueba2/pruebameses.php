<?php
    class pruebameses2{

        private $meses;

        //ponemos al metodo en privado en este caso para llamar al array.
        //metodo que se llama con $this
        private function darValores(){
            $this->meses = array(
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo");
        }

        //con este metodo a public llamamos al metodo darValores para pasarselo a la pagina externa y visualizarlo posteriormente.
        public function mostrar(){
            $this->darValores();
            print_r($this->meses);
        }
}

$objMeses = new pruebameses2();