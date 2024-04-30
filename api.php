<?php
require_once("./function.php");

try{
      if(!empty($_GET['demande'])){
           $url = $_get['demande'];
           getservices();
           }    
      else {
        throw new Exception ("probleme de recuperation de donnees.");
      }
      
}catch(Exception $e){
          $erreur =[
                "message" =>$e-> getmessage(),
                "code" => $e->getcode()
          ];
        print_r($erreur);

} 
?>

