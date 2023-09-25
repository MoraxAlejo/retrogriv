<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="css/Login5.css">

</head>
<body background="bomberos1.jpg">
	<div class="wrapper fadeInDown">
  <div id="formContent">
   
       

    
    <form action="inicarsesionaction.php" method="post">
    	<img src="user.jpg">
      <br>
      <div class="form-group col-md-7" style="position:absolute; left:20%;">
                  <label for="inputState">Tipo de documento</label>
      <br>
      <select class="form-control" name="modoidentificacion" >
        <option>T.I.Tarjeta De Identidad</option>
        <option>Cedula</option>
              <option>Pasaporte</option>
                     </select>
    </div><br>
      <br>
        <br> 
  <br>

      <input type="text" id="numeroid" class="fadeIn second" name="numeroid" placeholder="Numero de documento">
      <br>
      <br>
      <input type="text" id="numeroid" class="fadeIn third" name="contraseña" placeholder="password">
      <br>
      <br>
      	<br> 
	<br><br><br>
	<input type="submit" class="fadeIn fourth" value="Ingresar">
    </form>

   
    <div id="formFooter">
      <a class="underlineHover" type="" href="#">Olvido contraseña?</a>
    </div>

  </div>
</div>

</body>
</html>