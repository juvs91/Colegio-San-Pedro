<!DOCTYPE html>

<?php
/* Get the actual page */
  if (isset($_REQUEST['page']) && ( 
            $_REQUEST['page'] == 'acerca' || $_REQUEST['page'] == 'oferta' || $_REQUEST['page'] == 'admisiones' || $_REQUEST['page'] == 'galeria' || $_REQUEST['page'] == 'contacto' 
            )) { 
            $page = $_REQUEST['page']; 
  }else{
    $page = 'inicio';
  }
?>


<html xmlns="http://www.w3.org/1999/xhtml"> 
    <head> 
      <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"> 
      <meta property="og:title" content="Colegio San Pedro" />  
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
      <link rel="Shortcut Icon" type="image/x-icon" href="icono.png" />
      <title>Colegio San Pedro</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="css/bootstrap.css" rel="stylesheet" media="screen">
      <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>

  </head>
  
  <body>

    
<!-- ALERTA -->
<div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

  <h4>P&aacute;gina en construcci&oacute;n</h4>
  <h4>Nota: Solo es un demo</h4>

</div>

<!-- HEADER -->
    <div id="navMenu" class="navMenu">
      <div class="container noPadding">
        <div id="logoContainer">
         <a href="index.php?page=inicio"><div id="logo"></div></a>
        </div>
          
        <div class="navbar">
          <div class="navbar-inner">
              <ul class="nav">
                <li><a href="index.php?page=inicio">Inicio</a></li>
                <li class="divider-vertical"></li>
                <li><a href="index.php?page=acerca">Acerca</a></li>
                <li class="divider-vertical"></li>
                <li><a href="index.php?page=oferta">Oferta Educativa</a></li>
                <li class="divider-vertical"></li>
                <li><a href="index.php?page=galeria">Galeria</a></li>
                <li class="divider-vertical"></li>
                <li><a href="index.php?page=admisiones">Admisiones</a></li>
                <li class="divider-vertical"></li>
                <li><a href="index.php?page=contacto">Contacto</a></li>
                <li class="divider-vertical"></li>
              </ul>
              
          </div>
        </div>  
      </div>
    </div>

<!-- TERMINA HEADER -->
  

<?php   
  include($page.'.php');

?>


<!-- FOOTER -->

  <div class="container noPadding">
    <div id="upBtn"></div>
  </div>

    <div id="footerCont" class="navMenu">
      <div class="container"> 
        <div class="row-fluid">

          <!-- DATOS INFORMACION DEL FOOTER -->
          <div class="span8">
            <div class="span6 marginTop">
              <h5 class="boldSpan"> Direcci&oacute;n </h5>
              <p> Ave. Garza Sada 129 Col. Tecnologico</p>
              <p> Monterrey, Nuevo Le&oacute;n, M&eacute;xico </p>
            </div>

            <div class="span3 marginTop" >
              <h5 class="boldSpan"> Tel&eacute;fonos </h5>
              <p> (81)- 81234567</p>
              <p> (81)- 81234567</p>
            </div>
            <div class="span3 marginTop">
              <h5 class="boldSpan">Fax</h5>
              <p> (81)- 81234567</p>
            </div>
          </div>

          <!-- ICONOS REDES SOCIALES -->
          <div class="span4">
              <a href="#"><div id="twitterLogo" class="marginTop socialIcon"></div></a>
              <a href="#"><div id="facebookLogo" class="marginTop socialIcon"></div></a>
          </div>
        </div>

        <hr>
        <div class="row-fluid">

          <div class="span12">
          
            <div class="span4">
              <p>&#169; 2013 Colegio San Pedro. All rights reserved</p>
            </div>

            <div class="span8">
              <div id="julia" class="clearProp">
                <p style="color:#FFF;">Develop &amp; Design </p>
                <a  href="mailto:rms.julle@gmail.com">
                  <img width="83" height="30" src="images/julia.png" />
                </a>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
<!-- TERMINA FOOTER -->
  </body>
</html>

<!-- SCRIPT PARA HACER EL SCROLL HACIA ARRIBA -->
<script type="text/javascript">
    $(document).ready(function(){  
        $('#upBtn').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
 
    });
</script>

        
