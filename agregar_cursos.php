<?php
session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Agregar Curso</title>
 	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="css/Login5.css">
 </head>
 <script type="text/javascript">
  function ConfirmAgg() 
  {
    var respuesta = confirm("¿Estas Seguro Que Deseas Agregar Un Nuevo Curso?");

    if (respuesta == true) {
      return true;
    }
    else {
      return false;
    }
  }


</script>
 <body background="bomberos1.jpg">
 <div class="wrapper fadeInDown">
  <div id="formContent">
   
       
 
    
    <form action="agregar_curso_action.php" method="post">
      <div class="p-3 mb-2 bg-secondary text-white">AGREGAR CURSOS</div>
      
      <input type="text" id="numeroid" class="fadeIn second" name="nombre_curso" placeholder="Nombre" required autocomplete=" Nombre" >
      <br>
      <br>
      <input type="text" id="costo" class="fadeIn third" name="costo" placeholder="Costo" required autocomplete="costo">
      <br>
      <br>
      <input type="text" id="duracion" class="fadeIn third" name="duracion" placeholder="Duracion" required autocomplete="Duracion">
      <br>
      <br>
      <input type="text" id="codigo" class="fadeIn third" name="codigo" placeholder="Codigo" required autocomplete="codigo">
        <br>
      <br>
      <input type="text" id="codigo" class="fadeIn third" name="nombreprof" placeholder="Nombre Del profesor" required autocomplete="nombreprof">
        <br>
      <br>
      <input type="text" id="iden_profe" class="fadeIn third" name="iden_profe" placeholder="Identificacion del profesor" required autocomplete="iden_profe">
      <br>
      <br>
      <input type="submit" class="fadeIn fourth" name="crear" value="Crear Curso">


      			
 	</form>
 		
 </body>
 </html>