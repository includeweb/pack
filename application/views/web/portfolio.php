   <div class="row">
      	<div class="col-md-12 noPadding">
      		<div id="filters">  
	          <button class="button is-checked" id="todo" data-filter="*">todo</button>
	          <button class="button" id="oficinas" data-filter=".oficinas">oficinas</button>
	          <button class="button" id="viviendas" data-filter=".viviendas">viviendas</button>
	        </div>
      	</div>
      	
        
      </div>
      <div class="row">
      	<div class="col-md-6 col-sm-6 interna-img noPadding carousel slide" id="carousel-example-generic" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
          	<?
          	$cantCarousel = count($carousel);
          	$c = 1;
          	foreach ($carousel as $carouselItem) {?>

          		<div class="item <?if($c == 1){echo 'active';}?>" data-position="<?=$c?>">
	              <img src="<?=$carouselItem;?>" class="img-responsive">
	            </div>
          	<?
          	$c++;
          	}
          	?>

          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <div class="mid carousel-control"><span class="current">1</span> / <span class="total"><?=$cantCarousel;?></span></div>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      	<div class="col-md-6 col-sm-6 interna-content">
      		<div class="align-content">
      		<h2><?=$item->titulo;?></h2>
      		<?if($item->comentario != ''){?>
          		<p class="subtitle"><?=$item->comentario;?></p>
          	<? } ?>	
      		<h3><?=$item->subtitulo;?></h3>
	      		<p>
	      			<strong>UBICACIÓN:</strong> <?=$item->ubicacion;?><br>
    					<strong>AÑO DE EJECUCIÓN:</strong> <?=$item->ano;?><br>
    					<strong>ACTIVIDAD:</strong> <?=$item->actividad;?><br>
    					<strong>SUPERFICIE:</strong> <?=$item->superficie;?><br>
    					<strong>TIEMPO DE OBRA:</strong> <?=$item->tiempo;?><br>
    					<strong>PUESTOS DE TRABAJO:</strong> <?=$item->modalidad;?>
	      		</p>
      		</div>
      		<div class="row actions">
      			<div class="col-md-12 text-right">
      				<a href="../hacemos.html#todo"><img src="<?=base_url();?>images/portfolio-icon.png" width="40" style="margin-right:10px;" /></a>
      				<a href="./cascba.html"><img src="<?=base_url();?>images/back-icon.png" width="40"/></a>
      			</div>
      		</div>
      	</div>
      </div>
     