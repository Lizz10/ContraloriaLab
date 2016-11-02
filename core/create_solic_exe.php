<?php

print_r($_POST);

//conetcamos a la base de datos
//Array ( [dia] => 30 [mes] => 10 [ano] => 2016 [Cc] => 765765 [TipCer] => 2 [Cont] => on [msj] => kljklj ) 

try{
 require 'class/database.php';
 $objData = new Database();
 
    //Insertamos los datos del usuario a dar de alta.
    $sth = $objData->prepare('insert into solict'
            . 'VALUES (:id,:Cc,:TipCer,:dia,:mes,:anio,:Cont,:msj)');
    $id = "";
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $anio = $_POST['ano'];
    $Cc = $_POST['Cc'];
    $TipCer = $_POST['TipCer'];
    $Cont = $_POST['Cont'];
    $msj = $_POST['msj'];
  
    $sth->bindParam(':id',$id);
    $sth->bindParam(':Cc',$Cc);
    $sth->bindParam(':TipCer',$TipCer);
    $sth->bindParam(':dia',$dia);
    $sth->bindParam(':mes',$mes);
    $sth->bindParam(':anio',$anio);
    $sth->bindParam(':Cont',$Cont);
    $sth->bindParam(':msj',$msj);
    
    $sth->execute();

} catch (Exception $ex){        
  die('Error ');
} 
?>
