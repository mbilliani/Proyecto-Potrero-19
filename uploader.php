<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title></title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
  <link href="default.css" rel="stylesheet" type="text/css" media="all" />
  <link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>


<body>
  <div id="header-wrapper">
  <div id="header" class="container">
  	<div id="logo">
  		<h1><a href="iniciop.html"> <img src="images/logo.png" width="380" height="190" class="ccr" ></a></h1>
  	</div>
  	<div id="menu">
  		<ul>
  			<li><a href="iniciop.html" accesskey="1" title="">Inicio</a></li>
  			<li class="current_page_item"><a href="#" accesskey="2" title="">Subiendo</a></li>
  			<li><a href="actividadesp.html" accesskey="3" title="">Actividades</a></li>
  			<li><a href="historiap.html" accesskey="4" title="">Nuestra Historia</a></li>
  			<li><a href="index.html" accesskey="5" title="">Cerrar Sesión</a></li>
  		</ul>
  	</div>
  </div></div>
  <div id="page" class="container">
  	<div id="content">

<!-- Subir Archivos -->

      <form enctype='multipart/form-data' action='' method='post'>
      <input name='uploadedfile' type='file'><br>
      <input type='submit' value='Subir archivo'>
      </form>
    </div>
  </div>

<!-- PHP -->

<?php
$target_path = "uploads/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path));
{
echo <style='color:green;'> El archivo . basename( $_FILES['uploadedfile']['name']). ha sido subido <br>;
}
else{
echo "Ha ocurrido un error, trate de nuevo!";
}
?>
</body>
</html>
