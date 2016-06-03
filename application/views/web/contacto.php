 <script type="text/javascript" defer>
      $(document).ready(function() {
        //enviar el mail
        $('#enviar').click(function(){
        if($("form")[0].checkValidity()) {
            var nombre = $('#nombre').val();
            var email = $('#email').val();
            var mensaje = $('#comentario').val();
            $.post("enviar-datos.php", { nombre: nombre, email: email, mensaje: mensaje }).success(function(){
                $('.error').hide();
                $('.form-success').fadeIn('slow');
                $('.contact-content').slideToggle('slow');
            });
            $('.form-success').slideToggle('slow');
             setTimeout(function(){
                  $('.form-success').slideToggle('slow');
                }, 2500);
           }else{
            $('.error').show();
           }
        });


        $('.load').fadeIn('slow');
         $('.logo-title h3').addClass('fadeInLeft').fadeIn('slow');
            setTimeout(function(){
              $('.logo-title h2').addClass('fadeInLeft').fadeIn('slow');
            }, 500); 
              
            $('.section-change').click(function(){
              $('.load').fadeIn();
            });
            $('.top').click(function(){
              $('.grid').fadeOut(function() {
                $('.load').fadeIn();
              });
            });
           


      });


    </script>
<div class="load">
    
      <div id="contacto-text" class="row">
        <div class="col-md-4 col-sm-4 titulo-contacto padding45 animated"><span>CONTACTO</span><br /><span>PACK</span></div>
        <div class="col-md-8 col-sm-7 padding45 animated">
          <div class="contact-content">
          <form>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre" required>
                <label class="error">Este campo es requerido.</label>
              </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" placeholder="Email" required>
                  <label class="error">Este campo es requerido.</label>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
            <label for="email">Comentario</label>
              <textarea class="form-control" name="comentario" style="min-height:200px;" required></textarea>
              <label class="error">Este campo es requerido.</label>
            </div>
          </div>  
          <div class="row">
            <div class="col-md-12" style="margin-top:15px;">
             <a class="btn btn-default" href="javascript:void(0);" id="enviar">Enviar</a>
            </div>
          </div> 
          </form>
         </div>
         <div class="form-success" style="display:none;">
           <h4>Recibimos sus datos correctamente.</h4>
         </div>         
      </div>
      </div>
   
      </div>
