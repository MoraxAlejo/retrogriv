<!DOCTYPE html>
<html>
<head>
	<title>Certificado</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="css/Login5.css">
</head>
<body background="bomberos1.jpg"
 style="background-repeat: no-repeat; -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
   background-size: 130%;
   opacity: 1;
   ">

   <h1 class="alert alert-primary" align="center">Certificado<a style="float: right;"
 href="index.php"><input class="btn btn-info" type="button" name="" value="Regresar"> </a> </h1>

 <div class="wrapper fadeInDown" >
  <div id="formContent"style="position:absolute; left:30%;">
   
       

    
    <form action=".php" method="post">
    	
      <br>
      <div class="form-group col-md-7" style="position:absolute; left:20%;">
                  <label for="inputState">Tipo de documento</label>
      <br>
      <select class="form-control" name="modoidentificacion" >
        <option>T.I.Tarjeta De Identidad </option>
        <option>C.C.Cedula ciudadania</option>
              <option>Pasaporte</option>
                     </select>
    </div>
      <br>
      <br>
      <br> 
      <br>

      <input type="text" id="numeroid" class="fadeIn second" name="numeroid" placeholder="Numero de documento">
      <br>
      <br>
      
	<input type="submit" class="fadeIn fourth" value="Consultar">
    </form>

   
    <div id="formFooter">
      <a class="underlineHover" type="" href="#">Olvido contraseña?</a>
    </div>

  </div>
</div>

</body>
</html>