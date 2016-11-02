<?php
//inicio de variables de error
$err = isset($_GET['error']) ? $_GET['error'] : null ;

?>
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
<!--
    =============================
         encabezado
    ============================= 
    -->
  <div class="row teal lighten-2 ">
    <div class="col s12 l4 center-align">
<img src="img/img1.jpg" width="75%" class="space"> 
</div>
<div class="col s12 l4"><h4 class="center-align">SOLICITUD DEL DOCUMENTO</h4></div>
<div class="col s12 l4">
<p class="black-text">Codigo:</p>
<p class="black-text">Version:</p>
<p class="black-text">Fecha:&nbsp
<script>
var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
var f=new Date();
document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
</script>
   </p>
 </p>
</div>
</div>
    
<div class="row" id="color">
  <div class="col s12 card-panel teal lighten-2" id="panel">
    <p id="encabezado">solicitud de certificado laboral</p>
  </div>
<div class="row">
 <div class="container-modelador">
    <!--
    ========================================
       formulario solicitud de certificado
    ======================================== 
    -->
  <form action="../core/create_solic_exe.php" method="POST" name="DatosSolic">
       
       <script>
         var f = new Date();
          var anio = f.getFullYear();
          var mes = (f.getMonth() +1);
          var dia = f.getDate();

            document.write( '<input type="hidden" name="facha" value='+anio+"/"+mes+"/"+dia+'></input>' );
        </script>




      
   <!--
      <div class="input-field col s12 m12">
        <select id="prueba" name="tipoSoli">
          <option value="" disabled>Elija el tipo de certificado</option>
          <option value="1" id="1">Con funciones</option>
          <option value="2" id="2" selected>Sin funciones</option>
        </select>
          <label>Tipo de certificado</label>
      </div>
   -->
  <div class="row" > 
      <div class="col s12 m6 l6">
        <input placeholder="Ingrese su cedula" type="number" length="30" class="validate"  min="0" name="cedula" required>
        <label for="first_name">Cedula</label>
      </div>

      <div class="col s6 m3 l3">
        <input type="checkbox" id="test9" name="tipoSoli" />
        <label for="test9">funciones</label>
      </div>

      <div class="col s6 m3 l3 ">
        <input type="checkbox" id="test5" name="concertadas" />
        <label for="test5">Concertadas</label>
      </div>

   </div>   
    <!--
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="motivo"></textarea>
          <label for="textarea1">Motivo de la solicitud</label>
        </div>
      </div>
     -->
      
        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea" length="100" maxlength="100" name="motivo" required></textarea>
            <label for="textarea1">Motivo de la solicitud</label>
          </div>
        </div>
     


          
      <div class="input-field col s12 m12">
        <button class="btn waves-effect waves-light" type="submit" id="botton">Enviar</button>   
      </div>

       <?php 
        if($err==1){
          echo "Algo Salio Mal Intenta Mas Tarde <br />";
        }else if($err==2){
            echo "Solicitud Enviada Con Exito.<br />";
        }
       ?>

  </form>  

  </div>        
 </div>
</div>
  <p align="center">esta certificación se entregara (8) días despues  del &nbsp &nbsp &nbsp
<script>
var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
var f=new Date();
document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
</script>
   </p>

<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/materialize.min.js"></script>

</body>
</html>
