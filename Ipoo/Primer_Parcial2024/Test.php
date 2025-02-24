<?php 

    /* Test */

    include_once "Persona.php" ;
    include_once "Edificio.php" ;
    include_once "inmueble.php" ;

    $objPersona = new Persona("DNI", 27432561, "Carlos", "Martinez", 154321233) ;
    $objPersona2 = new Persona("DNI", 12333456, "Pepe", "Suarez", 4456722) ;
    $objPersona3 = new Persona("DNI", 12333422, "Pedro", "Suarez", 446678) ;

    $inmueble1 = new Inmueble(11, 1, "comercial", 50000, $objPersona2) ;
    $inmueble2 = new Inmueble(12, 1, "comercial", 50000, null) ;
    $inmueble3 = new Inmueble(13, 2, "departamento", 35000, $objPersona3) ;
    $inmueble4 = new Inmueble(14, 2, "departamento", 35000, null) ;
    $inmueble5 = new Inmueble(15, 3, "departamento", 35000, null) ;

    $coleccInmuebles = [] ;
   
    $edificio = new Edificio("Juab B. Justo 3456", $coleccInmuebles, $objPersona) ; 
    $coleccInmuebles = [$inmueble1, $inmueble2, $inmueble3, $inmueble4, $inmueble5] ;
    $edificio -> setColInmuebles($coleccInmuebles) ;

    $disponibles = $edificio -> darInmueblesDisponibles("departamento", 550000) ;
    var_dump($disponibles) ;

    $mariaela = new Persona("DNI", 28765436, "Mariela", "Suarez", 25543562) ;
    $alquilado = $edificio -> registrarAlquilerInmueble("departamento", 550000, new Persona("DNI", 28765436, "Mariela", "Suarez", 25543562)) ;    
        if($alquilado) {
            echo "Registrado" ;
        } else {
            echo "No registrado" ;
        }  
    $disponibles = $edificio -> darInmueblesDisponibles("departamento", 550000) ;
    print_r($disponibles) ;

    // echo $edificio ; 
    // $costo = $edificio -> calculaCostoEdificio() ; 
    // echo $costo ; 

    /* post parcial */
    $resultado = $inmueble4 -> alquilar($mariaela) ;
        if($resultado) {
            echo "Si" ; 
        } else {
            echo "no" ;
        }
    /* Terminado */