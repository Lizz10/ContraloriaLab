<?php

//print_r($_POST);



require 'class/database.php';

$objData = new Database();

$sth = $objData->prepare('SELECT * FROM users WHERE loginUsers = :login');

$sth->bindParam(':login', $_POST['userN']);

$sth->execute();

$result = $sth->fetchAll();

if($result){
    //echo "El usuario digitado ya existe en la base de datos, por favor digite uno nuevo.";
}else{

    
    $sth = $objData->prepare('INSERT INTO users '
            . 'VALUES (:idU, :login, :passU, :idProfile, :email,:status)');
    
    $id = "";

  try{

    
    if($_POST['tip']==null){

    }else{
      $tip = $_POST['tip'];    
    }
       
   } catch (Exception $ex) {
      
   }

    if($tip =="on"){
       $profile = 1 ;
    }else{
       $profile = 2;
    }
    $status="Enabled";


    $sth->bindParam(':idU', $id);
    $sth->bindParam(':login', $_POST['userN']);
    $sth->bindParam(':passU', $_POST['userP']);
    $sth->bindParam(':idProfile', $profile);
    $sth->bindParam(':email', $_POST['userC']);
    $sth->bindParam(':status', $status);
    $sth->execute();
    
    header('Location: ../view/administrador.php');
    
}
