<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pack Arquitectura</title>

    <!-- Bootstrap -->
    <link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>css/styles.css" rel="stylesheet">
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
        if ($('home').height() < $(window).height()) {
          $('home').height($(window).height());
        };
      });
    </script>

  </head>
  <body class="home">
    <div class="container">
      <nav class="navbar navbar-default">
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
              <li class="active"><a href="index.html" class="section-change" data-section="inicio">inicio</a></li>
              <li><a href="somos.html" class="section-change" data-section="somos">somos</a></li>
              <li><a href="hacemos.html" class="section-change" >hacemos</a></li>
              <li><a href="estilo.html" class="section-change" >estilo</a></li>
              <li><a href="contacto.html" class="section-change" >contacto</a></li>
            </ul>
     
           
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <section class="amarillo">
        <div>
          <img src="<?=base_url();?>images/logo-home.png" style="vertical-align:center" class="img-responsive" />
        </div>
      </section>
      <div class="social">
        <ul>
          <li><a href="" title="Facebook" target="_blank"a><img src="<?=base_url();?>images/facebook-icon.png" /></a></li>
          <li><a href="" title="Twitter" target="_blank"a><img src="<?=base_url();?>images/twitter-icon.png" /></a></li>
          <li><a href="" title="Pinterest" target="_blank"a><img src="<?=base_url();?>images/pinterest-icon.png" /></a></li>
          <li><a href="" title="LinkedIn" target="_blank"a><img src="<?=base_url();?>images/linkedin-icon.png" /></a></li>
          <li><a href="" title="Google+" target="_blank"a><img src="<?=base_url();?>images/google-icon.png" /></a></li>
        </ul>
      </div>

     
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/template.js"></script>
    
  </body>
</html>