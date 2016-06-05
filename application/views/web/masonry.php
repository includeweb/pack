<!DOCTYPE html>
<html>
<head>
  <title>Pack Arquitectura</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url();?>js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>js/isotope.pkgd.min.js"></script>

    <!-- Bootstrap -->
    <link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>css/styles.css" rel="stylesheet">
    <link href="<?=base_url();?>css/animate.css" rel="stylesheet">
    <link href="<?=base_url();?>css/responsive.css" rel="stylesheet">

    <!-- Bootstrap -->

    <meta name="keywords" content="<%meta_keywords%>">
    <meta name="robots" content="<%meta_robots%>">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" defer>
      var hash = window.location.hash.substr(1);
      $(window).on("load", function() {
        $('.grid').isotope('layout');
      });

      $(document).ready(function() {
        $('#hacemos').css('visibility','visible');
        var $grid = $('.grid').isotope({
          itemSelector: '.grid-item',
          layoutMode: 'masonry'
        });


        if (hash == '') {
          console.log(hash);
          $('.grid').hide();
          $('.load').fadeIn('slow');
          $('.logo-title h3').addClass('fadeInLeft').fadeIn('slow');
          setTimeout(function(){
            $('.logo-title h2').addClass('fadeInLeft').fadeIn('slow');
          }, 500);
        }
        else {
          $('.load').hide();
          if (hash == 'todo') {
            var filterValue = '*';
            $('.grid').isotope({ filter: filterValue });
          } 
          else {
            var filterValue = hash;
            $('.grid').isotope({ filter: '.'+filterValue });
          }
          
          // use filterFn if matches value
          // filterValue = filterFns[ filterValue ] || filterValue;

        }
        
        // $('.load').fadeIn('slow');
        // $('.logo-title h3').addClass('fadeInLeft').fadeIn('slow');
        // setTimeout(function(){
        //   $('.logo-title h2').addClass('fadeInLeft').fadeIn('slow');
        // }, 500); 
        
          
        // $('.section-change').click(function(){
        //   $('.load').fadeIn();
        // });
        // $('.top').click(function(){
        //   $('.grid').fadeOut(function() {
        //     $('.load').fadeIn();
        //   });
        // });
        // setTimeout(function(){
        //   generatePortfolio();
        // }, 100);       

        if ($('body').height() < $(window).height()) {
          $('body').height($(window).height());
        };

        $('.grid-item').hover(function() {
        var item = $(this).data('item');
          // $('.item-'+item).addClass('show');
          $('.item-'+item).stop();
          $('.item-'+item).fadeIn();
        }, function() {
          var item = $(this).data('item');
          // $('.item-'+item).removeClass('show');
          $('.item-'+item).stop();
          $('.item-'+item).fadeOut();
        });

        // if (hash != '') {
        //   console.log(hash);
        //   $('#'+hash).click();
        // }
        // else {
        // }
        //   $('#hacemos').css('visibility', 'visible');

        // filter functions
        var filterFns = {
          // show if number is greater than 50
          numberGreaterThan50: function() {
            var number = $(this).find('.number').text();
            return parseInt( number, 10 ) > 50;
          },
          // show if name ends with -ium
          ium: function() {
            var name = $(this).find('.name').text();
            return name.match( /ium$/ );
          }
        };

        // bind filter button click
        $('#filters').on( 'click', '.button', function() {
          if ($('.grid').is(':visible')) {
            console.log('hola');
            var filterValue = $( this ).attr('data-filter');
            // use filterFn if matches value
            filterValue = filterFns[ filterValue ] || filterValue;
            $grid.isotope({ filter: filterValue });
          }
          else {
            $('.grid').css('visibility', 'visible');
            $('.load').fadeOut('slow', function() {
              $('.grid').fadeIn('slow', function() {
                var filterValue = $( this ).attr('data-filter');
                // use filterFn if matches value
                filterValue = filterFns[ filterValue ] || filterValue;
                $grid.isotope({ filter: filterValue });
              });
              
            });
          }
        });

        
      });

      
      


      function generatePortfolio(){
        
        var height = $('.1').height();
        $('.violeta').height(height);
        $('.verde').height(height);
        $('.verde2').height(height);
         // init Isotope
        return $grid;

      }

    </script>
</head>
<body class="site" id="hacemos">
  <div>
    <header class="container">
      <div class="row black"></div>
      <div class="row logo-header">
        <div class="col-md-12 padding45">
          <img class="logo-nav" src="<?=base_url();?>images/logo-nav.jpg">
        </div>
      </div>
      <div class="row">
        <nav class="navbar navbar-default padding15">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="#">Brand</a> -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="index.html" class="section-change" data-section="inicio">inicio</a></li>
                <li><a href="somos.html" class="section-change" data-section="somos">somos</a></li>
                <li class="active"><a href="hacemos.html" class="section-change" >hacemos</a></li>
                <li><a href="estilo.html" class="section-change" >estilo</a></li>
                <li><a href="contacto.html" class="section-change" >contacto</a></li>
              </ul>
       
             
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </div>  
    </header>
    <div class="container">
      <div class="row">
        <div id="filters">  
          <button class="button is-checked" data-filter="*">todo</button>
          <button class="button" data-filter=".oficinas">oficinas</button>
          <button class="button" data-filter=".viviendas">viviendas</button>
          <!-- <button class="top" ><span class="glyphicon glyphicon-upload"></span></button> -->
        </div>
      </div>
      <div class="load">
      <div class="row">
        <div class="col-md-12 noPadding"><img src="<?=base_url();?>images/hacemos/hacemos-bg.jpg" class="img-responsive" /></div>
      </div>
      <div id="hacemos-text" class="row">
        <div class="col-md-4 col-sm-4 padding45 animated"><span>HACEMOS</span><br /><span>PACK</span></div>
        <div class="col-md-5 col-sm-7 padding45 animated"><span>El valor de nuestro trabajo no esta en lo que decimos, sino en lo que 
            hacemos. Nuestro trabajo incluye desde una asesoría en temas inmobiliarios, atravesando las distintas etapas de diseño y proyecto de arquitectura, diseño de interiores, space planning, proyecto ejecutivo, dirección de obra,ejecución y construcción de la obra, hasta la logística de la mudanza.</span></div>
      </div>
   
      </div>
      <div class="row grid">asdasd
      <?php
      $c = 1;
      foreach ($items as $item) {?>
       
     
        <a href="<?=base_url();?>web/portfolio/<?=$item->categoria;?>/<?=$item->url;?>">
        <div class="grid-item <?=$c;?> <?=$item->categoria;?>" data-item="<?=$c;?>">
          <div class="box animated item-<?=$c;?>">
            <div class="circle"></div>
            <div class="box-text"><?=$item->titulo;?></div>
          </div>
          <img src="<?=$item->imagen;?>" class="img-responsive" />
        </div>
        </a>
       <?php $c++; } ?>
      </div>

    </div>
    <footer class="container">
      <div class="row">
        <div class="social col-md-12 padding45">
          <ul>
            <li><a href="" title="Facebook" target="_blank"a><img src="<?=base_url();?>images/facebook-icon.png" /></a></li>
            <li><a href="" title="Twitter" target="_blank"a><img src="<?=base_url();?>images/twitter-icon.png" /></a></li>
            <li><a href="" title="Pinterest" target="_blank"a><img src="<?=base_url();?>images/pinterest-icon.png" /></a></li>
            <li><a href="" title="LinkedIn" target="_blank"a><img src="<?=base_url();?>images/linkedin-icon.png" /></a></li>
            <li><a href="" title="Google+" target="_blank"a><img src="<?=base_url();?>images/google-icon.png" /></a></li>
          </ul>
        </div> 
      </div>
    </footer>
  </div>
</body>
</html>