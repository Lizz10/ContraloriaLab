<?php
   $titulo="usuario Estandar";
  include_once 'plantilla/html-start.inc.php';
   ?>
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
        <li class="bold"><a href="verificarsolicitud.html" class="waves-effect waves-teal">Verificar solitudes <span class="new badge">1</span></a></li>
        <li class="bold"><a href="hojadeservicio.html" class="waves-effect waves-teal">Hoja de servicios</a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Colsuta de solicitud</a>
              
            </li>
            <li class="bold"><a  href="ingresarEmpleado.html" class="collapsible-header  waves-effect waves-teal">Ingrese datos del empleado</a>
              
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
        <script src=js/jquery-3.1.0.min.js></script>
        <script src="js/materialize.js"></script>
        <script>
           $(".button-collapse").sideNav();
           $(".dropdown-button").dropdown();
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

 