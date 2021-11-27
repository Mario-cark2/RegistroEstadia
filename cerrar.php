<?php
require('C:\xampp\htdocs\proyecto\conexion.php');
 
 
   if(!isset($_SESSION['matricula']))
   {
     require('C:\xampp\htdocs\proyecto\Login.html');
//esto ocurre cuando la sesion caduca.
        
   }
   else
   { 
     session_destroy();
       //echo "Has cerrado la sesion";

   }
 
 
   
?>