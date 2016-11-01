<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <?php
 if(!isset($titulo) || empty($titulo)){
          $titulo="Bienvenido";
        }
         echo "<title>$titulo</title>";
         ?>
	
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<?php
	  if(! isset($style) ||  empty($style)){
	  	$style="css/main.css";
	  }
	   echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"$style\">";
	?>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="page-login">