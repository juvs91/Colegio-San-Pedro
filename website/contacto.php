
<!-- FACEBOOK PLUGIN -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=446634545453831";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- TWITTER PLUGIN -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


<div id="contacto" class="clearProp">
  <div class="whiteBackground clearProp leftSide">
    <div class="container clearProp">
      <h2 class="marginTop">Informaci&oacute;n de Contacto</h2>
      
      <!-- GOOGLE MAPS -->
      <div class="maps">
        <!-- NOTA: EL IFRAME DEBE SER WIDTH:605PX; HEIGHT: 300PX -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1798.0425314774518!2d-100.359728!3d25.666668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662be381e86cc0f%3A0x2c22c3b3b13edc93!2sTecnol%C3%B3gico+de+Monterrey%2C+Eugenio+Garza+Sada%2C+Tecnol%C3%B3gico%2C+Monterrey%2C+Nuevo+Le%C3%B3n!5e0!3m2!1sen!2smx!4v1388377341967" width="605" height="300" frameborder="0" style="border:0"></iframe>
      </div>
      
      <!-- DATOS DE CONTACTO -->
      <h4>Direcci&oacute;n:</h4>
      <p>Garza Sada #3737 Col. Estadio, Monterrey, Nuevo Le&oacute;n</p>
      
      <h4>Telefonos:</h4>
      <p>
        (81) - 12 - 34 - 56 - 78
        <br/>
        (81) - 12 - 34 - 56 - 78

      </p>

      <br/>

      <h4>Encuentranos en las redes sociales</h4>

      <div class="redesSociales clearProp">
        <!-- FACEBOOK LIKE BUTTON
        NOTA: SOLO CAMBIAR EL LINK DE LA PAGINA >> data-href="https://developers.facebook.com" << -->
        <div class="fb-like" data-href="https://developers.facebook.com" data-width="80" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
        <!-- TWITTER BUTTON
        NOTA: SOLO CAMBIAR EL LINK DE LA PAGINA >> href="https://twitter.com/colSanPedro"  <<-->
        <div><a href="https://twitter.com/colSanPedro" class="twitter-follow-button" data-show-count="false" data-lang="es">Seguir a @colSanPedro</a></div>
        
      </div>

      
    </div>

  </div>

  <div class="whiteBackground clearProp rightSide">
    <div class="container clearProp" >
      <h2 class="marginTop">Forma de Contacto </h2>
      <hr>

      <div id="formaCont">    
      <!-- NOTA: EN ACTION PUSE "contact.php" LO DEJE POR SI ACASO SIRVE -->    
        <form  action="contact.php" method="post" name="forma_contacto" id="forma_contacto" onsubmit="return validarForm(this)" >

          <div class="row">
            <div class="span3">
              <label>Nombre y Apellido</label>
              <input name="nombre_input" id="nombre_input" type="text" class="reqd span3" placeholder="Escribe tu nombre">
              <p id="span_nombre" name="span_nombre" class="help-block ">*Campo Obligatorio</p>
              <br/>
              
              <label>Email</label>
              <input name="email_input" id="email_input" type="text" class="reqd span3" placeholder="Escribe tu correo electr&oacute;nico">
              <p id="span_email" name="span_email" class="help-block ">*Campo Obligatorio</p>
              <br/>

              <label>Tel&eacute;fono</label>
              <input name="asunto_input" id="asunto_input" type="text" class=" reqd span3" placeholder="Escribe un tel&eacute;fono">
              <p id="span_asunto" name="span_asunto" class="help-block ">*Campo Obligatorio</p>
              <br/>
              
            </div>
            <div class="span5">
              <label>Mensaje</label>
              <textarea name="mensaje_input" id="mensaje_input" rows="10" class="reqd input-xlarge"></textarea>
              <p id="span_mensaje" name="span_mensaje" class="help-block ">*Campo Obligatorio</p>
              <br/>
            </div>

            <div class="clear"></div>
            
            <!-- BOTONES SUBMIT Y LIMPIAR -->  
            <button class="btn pull-right" name="limpiar" type="reset" id="limpiar" onclick="resetForm()">Limpiar</button>
            <button style="margin-right: 10px;" type="submit" class="btn btn-primary pull-right" name="enviar_contacto" id="submit">Enviar</button>
          
          </div>
        </form>
      </div>

      

    </div>    
  </div>

</div>

<!-- ARCHIVO DE VALIDACION -->
<script type="text/javascript" src="js/validar.js"></script> 

