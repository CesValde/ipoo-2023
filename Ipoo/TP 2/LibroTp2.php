<?php 

    class Libro_2 {
        private $isbn ; 
        private $titulo ; 
        private $anioEdi ; 
        private $editorial ; 
        private $persona ;

        public function __construct(
            $isbn,
            $titulo,
            $anioEdi,
            $editorial,
            $persona
        ) {
            $this -> isbn = $isbn ;             
            $this -> titulo = $titulo ; 
            $this -> anioEdi = $anioEdi ; 
            $this -> editorial = $editorial ; 
            $this -> persona = $persona ;
        }

        public function getIsbn() {
            return $this -> isbn ; 
        }
        public function getTitulo() {
            return $this -> titulo ;
        }   
        public function getAnioEdi() {
            return $this -> anioEdi ;
        }
        public function getEditorial() {
            return $this -> editorial ;
        }
        public function getPersona() {
            return $this -> persona ;
        }
        

        public function setIsbn($isbn) {
            $this -> isbn = $isbn ; 
        }
        public function setTitulo($titulo) {
            $this -> titulo = $titulo ;
        }
        public function setAnioEdi($anioEdi) {
            $this -> anioEdi = $anioEdi ;
        }
        public function setEditorial($editorial) {
            $this -> editorial = $editorial ;
        }
        public function setPersona($persona) {
            $this -> persona = $persona ;
        }
        

        public function perteneceEditorial($pEditorial) {
            $editorial = $this -> getEditorial() ; 
            $pertenece = false ; 
                if($editorial == $pEditorial) {
                    $pertenece = true ; 
                }
            return $pertenece ; 
        }

        public function aniosDesdeEdicion() {
            $anioEdi = $this -> getAnioEdi() ; 
            $anios = 2023 - $anioEdi ; 

            return $anios ; 
        }

        public function __toString() {
            return "\n" . 
                "Numero de isbn: " . $this -> getIsbn() . "\n" .
                "Titulo: " . $this -> getTitulo() . "\n" .
                "Año de edicion: " . $this -> getAnioEdi() . "\n" .
                "Editorial: " . $this -> getEditorial() . "\n" . 
                "Datos de persona: " . $this -> getPersona() ;
        }
    }