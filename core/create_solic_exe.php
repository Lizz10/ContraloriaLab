<?php
   /*
      ========================================
                insertamos solicitud    
      ======================================== 
   */
    require 'class/database.php';
    $objData = new Database();

    $sth = $objData->prepare('INSERT INTO soli'
   	.' VALUES (:cedula,:tipoSoli,:concertadas,:motivo)');
  try{

    $cedula = $_POST['cedula'];
    $tipoSoli = $_POST['tipoSoli'];
    $concertadas = $_POST['concertadas'];
    $motivo = $_POST['motivo'];

    $sth->bindParam(':cedula', $cedula);
    $sth->bindParam(':tipoSoli',$tipoSoli );
    $sth->bindParam(':concertadas',$concertadas);
    $sth->bindParam(':motivo',$motivo);

    $sth->execute();
   
  } catch (Exception $ex) {
      header('Location: ../view/?error=1');
  }
  
  // nos regresamos al formulari de solicitud

   header('Location: ../view/?error=2');
  
?>