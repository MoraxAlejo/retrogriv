<!DOCTYPE html>
<html>
<head>
  <title>Registrar</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="css/Login5.css">
</head>
<body background="bomberos1.jpg">
<div class="wrapper fadeInDown">
  <div id="formContent">
   
       
 
    
    <form action="registrarcuenta.php" method="post">
      <div class="p-3 mb-2 bg-secondary text-white">REllENA LOS SIGUIENTES CAMPOS</div>
      
      <input type="text" id="numeroid" class="fadeIn second" name="nombre" placeholder="Nombre Completo" required autocomplete=" Nombre" >
      <br>
      <br>
      <input type="text" id="Apellidos" class="fadeIn third" name="apellidos" placeholder="Primer y segundo Apellidos" required autocomplete="Apellidos">
      <br>
      <br>
      <input type="date" name="nacimiento">
      <br>
      <br>
      <div class="form-group col-md-7" style="position:absolute; left:20%;">
                  <label for="inputState">Tipo de documento</label>
      <br>
      <select  name="modo_identificacion" class="form-control">
        <option>C.C.Cedula ciudadania</option>
                   <option>T.I.Tarjeta De Identidad </option>
                    <option>Pasaporte</option>
                     </select>
    </div>











    <br>
    <br>
    <br> 
    <br>
     <input type="text" id="identificacion" class="fadeIn third" name="identificacion" placeholder="Numero de documento" required autocomplete="identificacion">
      <br>
      <br>

      <div class="form-group col-md-7" style="position:absolute; left:20%;">
                  <label for="inputState">Cargo</label>
      <br>
      <select  name="cargo" class="form-control">
        <option> Usuario </option>
                  
                     </select>
    </div>
    <br>
    <br>
    <br><br>
    <input type="text" id="contraseña" class="fadeIn third" name="contraseña" placeholder="Contraseña" required autocomplete="contraseña">
      <br><br>
      <input type="text" id="correo" class="fadeIn third" name="correo" placeholder="Correo Electronico" required autocomplete="correo">
      <br>



      <br>
  <input type="submit" class="fadeIn fourth" name="Crear" value="Crear cuenta">
    </form>
  </div>
</div>


</body>
</html>
