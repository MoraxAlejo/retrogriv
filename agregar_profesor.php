<?php
session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Agregar Profesor</title>
 	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="css/Login5.css">
 </head>
 <script type="text/javascript">
  function ConfirmAgg() 
  {
    var respuesta = confirm("¿Estas Seguro Que Deseas Agregar Un Nuevo Profesor? Recuerda que este tendra que ser modificado en la tabla de usuarios con el respectivo cargo de 'Profesor' para que este pueda tener el acceso a todas las opciones del profesor");

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
   
       
 
    
    <form action="agregar_profesor_action.php" method="post">
      <div class="p-3 mb-2 bg-secondary text-white">AGREGAR PROFESOR</div>
      
      <input type="text" id="nombre_prof" class="fadeIn second" name="nombre_prof" placeholder="Nombre Del Profesor" required autocomplete="nombre_prof" >
      <br>
      <br>
      <input type="text" id="apellidos" class="fadeIn third" name="apellidos" placeholder="Apellidos" required autocomplete="apellidos">
      <br>
      <br>
      <input type="text" id="identificacion" class="fadeIn third" name="identificacion" placeholder="Identificacion" required autocomplete="identificacion">
      <br>
      <br>
      <input type="text" id="curso_acargo" class="fadeIn third" name="curso_acargo" placeholder="Curso Acargo" required autocomplete="curso_acargo">
        <br>
      <br>
      <input type="text" id="codigo_curso" class="fadeIn third" name="codigo_curso" placeholder="Codigo Del Curso" required autocomplete="codigo_curso">
      <br>
      <br>
      <input type="submit" class="fadeIn fourth" name="crear" value="Agregar Profesor" onclick="return ConfirmAgg()">


      			
 	</form>
 		
 </body>
 </html>