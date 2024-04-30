<?php
    function getservices(){
       $pdo = getconnexion();
       $req = "SELECT iddemande, idclient,description from demandeservice";
       $stmt = $pdo->prepare($req);
       $stmt->execute();
       $services = $stmt->fetchALL(PDO::FETCH_ASSOC);
       $stmt->closecursor();
       sendJSON($services);

}



function getconnexion(){
      return new PDO("mysql:host=localhost; dbname=entreprise_db;charset=utf8","root","");

}

function sendJSON($infos){
    header("Access-control-Allow-Origin: *");
    header("content-type: application/json");
    echo json_encode($infos,JSON_UNESCAPED_UNICODE);

}
?>