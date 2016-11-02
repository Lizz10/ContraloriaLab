<?php

   // print_r($_POST);
   
   //insertamos solicitud
    require 'class/database.php';
    $objData = new Database();

    $sth = $objData->prepare('INSERT INTO soli'
   	.' VALUES (:cedula,:tipoSoli,:concertadas,:motivo)');

    $cedula = $_POST['cedula'];
    $tipoSoli = $_POST['tipoSoli'];
    $concertadas = $_POST['concertadas'];
    $motivo = $_POST['motivo'];

    $sth->bindParam(':cedula', $cedula);
    $sth->bindParam(':tipoSoli',$tipoSoli );
    $sth->bindParam(':concertadas',$concertadas);
    $sth->bindParam(':motivo',$motivo);

    $sth->execute();
  
?>