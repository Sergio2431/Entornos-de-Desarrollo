<?php 
$sistemas=100;
$electronica=90;
$industrial=80;
$administracion=70;
$puntuacion=85;

  echo ("Acceso a la Facultad de Sistemas <br />");
  
if ($puntuacion==100){
    echo ("Puedes acceder a la facultad de sistemas<br />");
}else{
    echo ("Tu nota no llega para la facultad de sistemas <br />");
}

 echo ("<br /> Acceso a la Facultad de Electronica <br />"); 

if ($puntuacion>=90){
    echo ("Puedes acceder a la facultad de electronica<br />");    
}else{
    echo ("Tu nota no llega para la facultad de electronica<br />");
}

 echo ("<br /> Acceso a la Facultad de Industriales <br />");
 
 if ($puntuacion>=80){
     echo ("Puedes acceder a la facultad de industriales<br />");
 }else{
     echo ("Tu nota no llega para la facultad de industriales<br />");
 }
 
 echo ("<br /> Acceso a la Facultad de Administracion <br />");
 
 if ($puntuacion>=70){
     echo ("Puedes acceder a la facultad de administracion<br />");
 }else{
     echo ("Tu nota no llega para la facultad de administracion<br />");
 }

?>