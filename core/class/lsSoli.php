<?php
//clase para la manipulacion de datos   
 class lsUsuariso{
    
    function Ver($sql1){

     require'sessions.php';
     require'database.php';

     $objses = new Sessions();
     $objses->init();

     $nameU = $objses->get('loginUsers');
     $idUse = $objses->get('idUser');
     $idp   = $objses->get('idprofile');

     $objData = new Database();

  $res="";  
   foreach ($objData->query($sql1) as $row){
 
           $perfil=$row['idprofile'];
           if($perfil=="1"){
             $perfil="Administrador";
           }else if($perfil=="2"){
             $perfil="Lider Del Proyecto";
           }else{
            $perfil="Externo";
           }

   if($idp==1){
           $res.= '
                <tr>     
                   <td class="texto"><a href=" editar.php?D='.$row['idUsers'].'">'.$row['path_imgUser'].'</a></td>
                   <td class="texto">'.$row['loginUsers'].'</td>
                   <td class="texto">'.$perfil.'</td>
                   <td class="texto">'.$row['status'].'</td>           
                </tr>';
         }else{
           $res.= '
              <tr>      
                 <td class="texto">'.$row['path_imgUser'].'</td>
                 <td class="texto">'.$row['loginUsers'].'</td>
                 <td class="texto">'.$perfil.'</td>
                 <td class="texto">'.$row['status'].'</td>
             </tr>';
         }   
         }if($res=="") {
            echo'No Hay Registros';    
          }else{
         echo $res;        
         }
   }
} 
?>
