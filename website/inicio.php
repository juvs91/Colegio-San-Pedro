
<!-- FACEBOOK PLUGIN -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=446634545453831";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<!-- SLIDER CONTENT -->

    <div id="sliderMainContainer">
      <div class="container clearProp" >
          
        <ul class="rslides">
          <li><img src="/images/foto1.png" alt=""></li>
          <li><img src="/images/foto2.png" alt=""></li>
          <li><img src="/images/foto3.png" alt=""></li>
        
        </ul>
    
                 
      </div>
    </div>


<!-- PRINCIPAL CONTENT -->

<div id="principalContent" class="principalContent">
  <div class="container ">
    <div class="row-fluid">
      <div class="span8">

        <!-- BOTONES ACCESO DIRECTO -->
        <h2 class="marginTop"> Nuestros niveles educativos</h2>
        <button class="btn btn-large btn-warning" type="button">Kinder</button>
        <button class="btn btn-large btn-success" type="button">Primaria</button>
        <button class="btn btn-large btn-info" type="button">Secundaria</button>
    
        <h2  style="margin-top: 40px;"> Ultimas Noticias</h2>
        <? include("noticias.php"); ?>
      

      </div>

      <div class="span4">
        
        <!-- CUADRO DE SUSCRIBETE AHORA -->
        <div class="thumbnail marginTop center well well-small text-center">
          <h2>&#161;Suscribete!</h2>
            
          <p>Suscribete para recibir nuestros avisos de manera inmediata</p>
            
          <form action="" method="post">
            <div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span>
                <input type="text" id="" name="" placeholder="correo@email.com">
            </div>
            <br>
            <input type="submit" value="&#161;Suscribir Ahora!" class="btn btn-large">
          </form>
        </div>

        <!-- PLUGIN ACTIVIDAD FACEBOOK -->
        <div id="facebookContainer" class="thumbnail marginTop center well well-small text-center">
          <!-- NOTA: SOLO CAMBIAR EL LINK EN >>data-href="http://www.facebook.com/saitc.mty"<< -->
          <div class="fb-like-box" data-href="http://www.facebook.com/saitc.mty" data-width="265" data-height="The pixel height of the plugin" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="true"></div>
        </div>

        <div class="clearWithHeight"></div>

      </div>
      
    </div>


  </div>
  

</div>

<!-- TERMINA PRINCIPAL CONTENT -->


<!-- SCRIPT PARA EL SLIDER -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script type="text/javascript">

  $(".rslides").responsiveSlides({
    auto: true,             // Boolean: Animate automatically, true or false
    nav: true,             // Boolean: Show navigation, true or false
    pause: true,           // Boolean: Pause on hover, true or false
    maxwidth: "941",           // Integer: Max-width of the slideshow, in pixels
    speed: 100  
  });
</script>