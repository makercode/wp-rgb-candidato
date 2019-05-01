<?php get_header(); ?>
<section class="secCont2 carrerap">
	<div class="container">
		<div class="row">
			<div class="titulo-cont1 titulo-sinbull">
				<?php the_field('uc-titulo'); ?> 
			</div>
			<div class="carrerap-contxt">
				<div class="camp-txt camp-txt-carreras">
					<?php the_field('uc-txt'); ?> 
				</div>
				<div class="titulo-cont2">
					<?php the_field('uc-stitulo'); ?> 
				</div>
				<div class="carreras-txt">
					<div class="camp-txt carrera-tabcont">
						<?php the_field('uc-contenido'); ?> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="carrerap-coments">
		<div class="container">
			<div class="row">
				<div class="carrerap-comentsitem">
					<?php the_field('uc-comentarios'); ?> 
				</div>
			</div>
		</div>
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