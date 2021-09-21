<?php
$nombre = 'David';
$edad = 21;
$feo = false;
$dinero = 80.34;
$apellidos = null;

print_r("Su nombre es: {$nombre} </br> "); // concatenar
print_r('Su nombre es: ' . $nombre); // concatenar

if ($dinero < 25){
    print_r($nombre. 'Sos pobre');
}
else {
    print_r($nombre. 'No sos pobre');
}


if (!$apellidos) {
    print_r('</br> Entro en el if');
}


switch ($nombre) {
    case "pepe":
        print_r('pepe');
        break;
    default:
        print_r("Default");
        break;
}