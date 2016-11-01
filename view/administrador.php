<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <style type="text/css"> 

    .card .card-header {
      padding: 10px;
    background-color: #26A69A;
    text-align: center;
    margin: 0px;
    }  

  
    .contenedor {
      width: 80%;
      margin-left: auto;
      margin-right: auto;
    }
    .center{
      margin-left: auto;
      margin-right: auto;
      width: 80%;
    }
    .card-content
    {
      width: 90%;
      margin-right: auto;
      margin-left: auto;
    }
     section {
      padding-left: 310px;
    }
    .page-footer {
      padding-left:310px;
      position: fixed;
      bottom: 0px;
      width: 1400px;
      height: 80px;

      opacity: 0.5;
    }

    @media only screen and (max-width : 992px) {
     footer, section {
        padding-left: 0;
      }
    }
  

   </style>  
</head>
<body>
<header>
<nav class="top-nav teal lighten-2">
        <ul class="right">
          <li>
            <a href="sass.html">
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

  <?php
   require 'plantilla/footer.inc.php';


  ?>


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