<?php get_header(); ?>
<?php 
	$image = get_field('imagen_fondo');
	$title_1 = get_field('titulo_persuacion');
	$sub_title_1 = get_field('subtitulo');
	$youtube_video = get_field('youtube');
	$facebook_video = get_field('facebook');
	$vimeo_video = get_field('vimeo');
	$texto_previo_pasos = get_field('texto_previo_pasos');
	$texto_previo_requisitos = get_field('texto_previo_requisitos');
	$tipo_video = get_field('media_extra');
//	$pasos = "";
//	$requisitos = "";
//	$pasos_titulo = get_field('titulo_pasos');
//	$req_titulo = get_field('req_titulo');
//	$count_paso = 1;
//	$contiene_pasos_y_requisitos = get_field('contiene_pasos_y_requisitos');

	// check if the repeater field has rows of data
	if( have_rows('pasos') ):
	 	// loop through the rows of data
	    while ( have_rows('pasos') ) : the_row();
	        // display a sub field value
	        $pasos .= "<li><span class='num-paso'>".$count_paso."</span>".get_sub_field('paso')."</li>";
	        $count_paso++;
	    endwhile;
	else :
	endif;

	// check if the repeater field has rows of data
	if( have_rows('requisitos') ):
	 	// loop through the rows of data
	    while ( have_rows('requisitos') ) : the_row();
	        // display a sub field value
	        $requisitos .= "<li><span class='num-requisito'> <i class='fa fa-check' aria-hidden='true'></i> </span>".get_sub_field('requisito')."</li>";
	    endwhile;
	else :
	endif;
	
?>
<div class="campaign-slide" style="background: url(<?php echo $image['url']; ?>) center no-repeat;background-size:cover;">
	<div class="video-container">
		<?php if ($tipo_video!=="nada"): ?>
			<div class="container">
				<div class="frame-video">
					<?php if ($tipo_video=='youtube'): ?>
						<?php echo $youtube_video; ?>
					<?php elseif($tipo_video=='facebook'): ?>
						<?php echo $facebook_video; ?>
					<?php elseif($tipo_video=='vimeo'): ?>
					<?php endif ?>
				</div>
			</div>
		<?php endif ?>
	</div>
</div>
<h1 class="campaign-title">
	<?php echo $title_1; ?>
</h1>
<h2 class="campaign-subtitle">
	<?php echo $sub_title_1; ?>
</h2>
<section class="secCont2 univ">
	<div class="container">
		<div class="row">
			<?php 
				echo the_content();
			?>
		</div>
		<?php if ($contiene_pasos_y_requisitos=="si"): ?>
			<div class="step-requisitos clearfix">
				<div class="left-column">
					<div class="inner-content">
						<h3>
							<?php echo $pasos_titulo; ?>
						</h3>
						<p>
							<?php echo $texto_previo_pasos; ?>
						</p>
						<ul class="list-pasos-campaign">
							<?php echo $pasos ?>
						</ul>
					</div>
				</div>
				<div class="right-column">
					<div class="inner-content">
						<h3>
							<?php echo $req_titulo; ?>
						</h3>
						<p>
							<?php echo $texto_previo_requisitos; ?>
						</p>
						<ul class="list-requisitos-campaign">
							<?php echo $requisitos ?>
						</ul>
					</div>
				</div>
			</div>
		<?php endif ?>
	</div>
</section>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php get_footer(); ?>