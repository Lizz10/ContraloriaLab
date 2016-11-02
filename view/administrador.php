<?php
   require '../core/class/host.php';
   //$objData = new Database();

   //clease host
   $objhost = new host();
   $host=$objhost->nombre();

  //llamamos a la clase de inici de sesion
   require'../core/class/sessions.php';
   $objses = new Sessions();
   $objses->init();
  //llamaos datos de sesion
   $nameU = $objses->get('loginUsers');
   $idUse = $objses->get('idUser');
   $tipoU = $objses->get('idProfile');
  
   $user = isset($nameU) ? $nameU : null ;

   if($user == '' or $tipoU <> 1){
     header('Location: http://'.$host.'/C/?error=2');
   }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="css/administrador.css">
</head>
<body>
<header>
<nav class="top-nav teal lighten-2">
        <ul class="right">
          <li>
            <a  href="../core/log_out.php" >
              <i class="large material-icons right">perm_identity
              </i>Salir
            </a>
          </li>
       </ul>
        <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a></div>
      <ul id="nav-mobile" class="side-nav fixed">
        <li class="bold"><a href="modal.html" class="waves-effect waves-teal">Crear usuario estandar</a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a  href="eliminar.html" class="collapsible-header  waves-effect waves-teal">Eliminar o actrualizar usuario estandar</a>
              
            </li>
            <li class="bold"><a href="novedad.html" class="collapsible-header  waves-effect waves-teal">Novedad salario</a>
              
            </li>
            
          </ul>
        </li>
        </ul>
      </nav>
        </header>

   <main>
     
   </main>

    <section>

   </section>


<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/materialize.min.js"></script>
<script>
	  $(".button-collapse").sideNav();
	  $(".dropdown-button").dropdown();
    $('.modal-trigger').leanModal();
    $(document).ready(function(){
      $("#nav-mobile a").click(function(){
         var desec = $(this).attr("href");
          $("section").load(desec);
          return false;
      });
    })
 
</script>

</body>
</html>