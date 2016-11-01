  
<!--$titulo="solicitud";
$style="css/solicitud.css";
include_once 'plantilla/html-start.inc.php';
?>-->
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet"  href="css/materialize.min.css"> 
  <link rel="stylesheet"  href="css/solicitud.css">
  <script>
    
    function iniciar(){
          $(document).ready(function() {
    $('select').material_select();

  }); 

     var prueba = document.getElementById("prueba");

     prueba.addEventListener("change",mensaje,false);

    }


    function mensaje(){
      alert("si funciona esto");
    }

    window.addEventListener("load",iniciar,false);
  </script>
</head>
<body>

  <div class="row teal lighten-2 ">
    <div class="col s12 l4 center-align">
<img src="img/img1.jpg" width="75%" class="space"> 
</div>
<div class="col s12 l4"><h4 class="center-align">SOLICITUD DEL DOCUMENTO</h4></div>
<div class="col s12 l4">
<p class="black-text">Codigo:</p>
<p class="black-text">Version:</p>
<p class="black-text">Fecha:</p>
</div>
</div>
<!------------------------------------------- termina encabezado  --------------------------------------------------- -->

<div class="row" id="color">

  <div class="col s12 card-panel teal lighten-2" id="panel">
    <p id="encabezado">solicitud de certificado laboral</p>
  </div>

<div class="row">
<div class="container-modelador">
    <form>
      
        <div class="input-field col s12 m12">
          <input placeholder="Ingrese su cedula" type="number" length="30" class="validate" required>
          <label for="first_name">Cedula</label>
        </div>
         <div class="input-field col s12 m12">
            <select id="prueba">
              <option value="" disabled selected>Elija el tipo de certificado</option>
              <option value="1" id="1">Con funciones</option>
              <option value="2" id="2">Sin funciones</option>
            </select>
              <label>Tipo de certificado</label>
              </div>
              <div class="col s12 m12">
                <input type="checkbox" id="test5" />
              <label for="test5">Concertadas</label>

              </div>
              <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Motivo de la solicitud</label>
        </div>
      </div>
    </form>
  </div
              
                  <div class="input-field col s12 m12">
                <button class="btn waves-effect waves-light" type="submit" name="action" id="botton">Enviar</button>   
                 </div>
                
            
               

              
 </form>
 </div>
        
  </div>
 </div>
  <p>esta certificación se entregara (8) días despues del recibimiento y se enviara la copia de la hoja de vida del funcionario.</p>


<?php
 include_once 'plantilla/footer.inc.php';
?>


<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/materialize.min.js"></script>

</body>
</html>

      

