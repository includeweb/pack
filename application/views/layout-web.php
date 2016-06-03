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
    <meta name="description" content="<%meta_description%>">
    <meta name="keywords" content="<%meta_keywords%>">
    <meta name="robots" content="<%meta_robots%>">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" defer>
      $(document).ready(function() {

        // $(".owl-carousel").owlCarousel({
        //   items: 1,
        //   nav: true
        // });

        $('.carousel').carousel();
        
        $('.carousel').on('slid.bs.carousel', function () {
          $('.current').text($('.item.active').data('position'));
          // current = $('.current').text();
          // cantidad = parseInt($('.total').text());
          
          // if (current >= cantidad) {
          //   $('.current').text(1);
          // }
          // else {
          //   $('.current').text(parseInt(current) + 1);
          // }
        })

        $('.button').click(function(){
          window.location.href = '../hacemos.html#'+$(this).attr('id');
        });


        if ($('body').height() < $(window).height()) {
          $('body').height($(window).height());
        };
      });

    </script>
</head>
<body class="site interna">
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
              <!-- <a class="navbar-brand hidden-md hidden-lg" href="#">Brand</a> -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="../index.html" class="section-change" data-section="inicio">inicio</a></li>
                <li><a href="../somos.html" class="section-change" data-section="somos">somos</a></li>
                <li class="active"><a href="../hacemos.html" class="section-change" >hacemos</a></li>
                <li><a href="../estilo.html" class="section-change" >estilo</a></li>
                <li><a href="../contacto.html" class="section-change" >contacto</a></li>
              </ul>
       
             
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </div>  
    </header>
    <div class="container">
    	<?php echo $content_for_layout?>
     
     
     
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