<?php

   /*
      ========================================
                insertamos solicitud    
      ======================================== 
   */

   print_r($_POST);
      
    require 'class/database.php';
    $objData = new Database();

    $sth = $objData->prepare('INSERT INTO soli'
   	.' VALUES (:cedula,:tipoSoli,:concertadas,:motivo,:facha,:estadoSoli)');
  
 
    $cedula = $_POST['cedula'];


    try{
    if($_POST['tipoSoli']==null){
      $tipoSoli="off";
    }else{
      $tipoSoli = $_POST['tipoSoli'];    
    }
   } catch (Exception $ex) { 
   }  
     

    try{
    if($_POST['concertadas']==null){
     $concertadas="off"; 
    }else{
     $concertadas = $_POST['concertadas'];    
    }
   } catch (Exception $ex) { 
   }  

    
    $motivo = $_POST['motivo'];
    $facha = $_POST['facha'];

    $estadoSoli=1;
    
    $sth->bindParam(':cedula', $cedula);
    $sth->bindParam(':tipoSoli',$tipoSoli );
    $sth->bindParam(':concertadas',$concertadas);
    $sth->bindParam(':motivo',$motivo);
    $sth->bindParam(':facha',$facha);
    $sth->bindParam(':estadoSoli',$estadoSoli);
    $sth->execute();
   
  
  
  // nos regresamos al formulari de solicitud

   header('Location: ../view/?error=2');
  
?>