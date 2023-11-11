<?php

include 'index.php';




if (isset($_POST['cotizar'])) {
    $clase = $_POST['clase'];
    $acabado = $_POST['acabado'];
    $calibre =    $_POST['calibre'];
    $diseno =   $_POST['diseno'];  
    $alto = $_POST['alto'];
    $ancho =  $_POST['ancho'];

    $medir = ($alto / 100) * ($ancho / 100);
    
    

    switch ($clase) {
        case 'tr':
            $clases = 90000 ;
            $vidrio = ' transparente ';
            break;
        
        case 'br':
            $clases = 120000 ;
            $vidrio = ' bronce ';
            break;

        case 'az':
            $clases = 120000 ;
            $vidrio = ' azul ';
            break;  
        }
    
    switch ($acabado) {
        case 'crudo':
            $acabados = 0 ;
            $acabadov = ' crudo';
            break;
        
        case 'templado':
            $acabados = 50000 ;
            $acabadov = ' templado ';
            break;
        }

    switch ($calibre) {
        case '6':
            $calibres = 0 ;
            $calibrev = ' 6mm ';
            break;
        
        case '8':
            $calibres = 60000 ;
            $calibrev = ' 8 mm ';
            break;

        case '10':
            $calibres = 120000 ;
            $calibrev = ' 10 mm ';
            break;  
        }

    switch ($diseno) {
        case 'sindiseno':
            $disenos = 0 ;
            $disenov = 'limpio ';
            break;

        case 'sanblasting':
            $disenos = 40000 ;
            $disenov = ' sanblasting ';
            break;
        
        case 'pintado':
            $disenos = 60000 ;
            $disenov = ' pintado ';
            break;    
    }

      $total = ($clases + $acabados + $calibres + $disenos) * $medir;

   echo '<h3 class="php"> El vidrio ' .$vidrio.''.$acabadov. ' de calibre '.$calibrev.' con  diseño '.$disenov.' de '.$alto.' cm de alto y '.$ancho.' cm de ancho tiene un valor de ' .$total. ' pesos.</h3>';   

}

?>

