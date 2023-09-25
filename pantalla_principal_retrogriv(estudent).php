<?php 
session_start();
require_once "conexionbasedatos.php";
$codigo_curso = $_GET['codigo'];
$nombre = $_SESSION['nombres'];
$identificacion = $_SESSION['identificacion'];
$sql = "SELECT * from usuario where nombre = '$nombre'";
$result = $objconexion->query($sql);
$row = mysqli_fetch_assoc($result);


$sql2 = "SELECT * from estudiantes where identificacion = '$identificacion'";
$result2 = $objconexion->query($sql2);
$row2 = mysqli_fetch_assoc($result2);


 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pantalla Principal</title>
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <div class="fixed-top">
  
  <nav class="navbar navbar-dark bg-dark">
    <img src="retrogriv.jpg" class="bd-placeholder-img rounded-circle" align="right" height="70" width="70"  >
    <font color="#E39B00">
    <h1>RETROGRIV</h1></font>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-10" id="header">
      


<nav >
        <ul class="nav" id="inicio">
            <li><a href="#"style="padding:25px 231.5px">Inicio</a></li>
        </ul>
        <ul class="nav">
            <li><a href="#" id="portafolio" style="padding:25px 215.5px">Portafolio</a></li>
        </ul>
            <ul class="nav" id="info">
            <li><a href="#" style="padding:25px 208px">Informacion</a></li>
        </ul>
        <ul class="nav">
                <li><a href="#" id="evidencia" style="padding:25px 215px">Evidencia</a></li>
            </ul>
            <ul class="nav">
                <li><a href="#" id="Chat" style="padding:25px 232.5px">Chat</a></li>
            </ul>
            
        </ul>
</nav>
    </div>
  </div>
</div>
</head>
<body>
    
<br><br>
<br>
<br>

<div class="dropdown" align="right" style="">
    <nav>

  <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='width:115px; height:45px:; position: relative;
  left: -30px;'>
       
     <img src="user.svg" style="width: 30px;"  ><?php echo $_SESSION['nombres']  ?>
  </button>


  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Mi Perfil</button>
    
    <a href="close.php"><button class="dropdown-item" type="button" onclick="return ConfirmClose()">Cerrar Sesion</button></a>
</nav>
  </div>
</div>
<br><br>


<br><br><br><br><br>
  




  <div class="card" style="width: 16rem;position: relative; top: -150px" >
  <img src="retrogriv.jpg" class="card-img-top" alt="..." width="95" height="150"  >
  <a href="#########"><div class="card-body" style="position: relative; top: 20px">
   <font color="black"> <h3><?php echo $row2['codigo_curso'] ?></h3>
    <p class="card-text" style="background-color: white;"><?php echo $row2['nombre_curso'] ?>
      
    </p></font></a>
  </div>
</div><br><br><br>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width:659px;
     height:400px;  position: relative;
       left: 680px;
       right: 690px;
       top: -400px" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="asesor.jpg" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="perro1.jpg" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="asesor1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="perro2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




























<!--<?php 
session_start();
$codigo_del_curso = $_GET['codigo_curso']; 
require_once ('conexionbasedatos.php');
$objconexion = new mysqli($host,$user,$password,$basedatos);

$sql = "SELECT * from curso where codigo = '$codigo_del_curso'" ;
$resultado = $objconexion->query($sql);
$existe= mysqli_fetch_assoc($resultado);

?> 
<!DOCTYPE html>
<html>
<head>
	<title>Retrogriv Inicio</title>
</head>
<body> 
	<center>
		<br>
			<br>
				<br>
					<h1> Bienvenido a RetroGriv <?php echo $_SESSION['nombres'] ?> Usted Esta Inscrito en el curso <?php echo $existe['nombre'] ?> </h1> 

					<br><br>




	</center>

</body>
</html>-->