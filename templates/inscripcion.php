<?php
/**
 * Template Name: inscripcion
 */
?>

<?php get_header(); ?>
<a href="#inscripcion" title="">
	<?php $insfondo=get_field("ins-fondo"); ?>
	<div class="incrip-video" style="background:url('<?php echo $insfondo['url']; ?>') center;">
	</div>
</a>
<section class="secCont2 inscrip">
	<div class="container">
		<div class="row">
			<div class="titulo-cont1 titulo-sinbull">
				<?php the_field("ins-titulo"); ?>
			</div>
			<ul class="inscrip-list">
				<?php if( have_rows('ins-pasos') ): ?>
				    <?php while( have_rows('ins-pasos') ): the_row(); ?>
						<li class="col l4 m6 s12">
							<div class="inscrip-item">
								<span class="inscrip-numero">
									<?php the_sub_field("ins-pnum"); ?>
								</span>
								<h2>
									<?php the_sub_field("ins-ptitulo"); ?>
								</h2>
								<?php the_sub_field("ins-ptxt"); ?>
							</div>
						</li>
				    <?php endwhile; ?>
				<?php endif; ?>
			</ul>
            <div class="incrip-pdf">
				<div class="titulo-cont1 titulo-sinbull">
			    	<?php the_field("extras"); ?>
				</div>
            </div>
		</div>
	</div>
	<div class="inscrip-lema">
		<div class="container">
			<div class="lema">
				<?php the_field("ins-frase"); ?>
			</div>
			<a href="<?php the_field("ins-fbtnlink"); ?>" title="<?php the_field("ins-fbtnnom"); ?>" class="btn-ico-img waves-effect waves">
				<i>
					<img src="<?php echo get_template_directory_uri() ?>/img/plantilla/icono_boton_banner.svg">
				</i>
				<?php the_field("ins-fbtnnom"); ?>
			</a>
		</div>
	</div>
	<div class="carrerap-coments">
		<div class="container">
			<div class="row">
			</div>
		</div>
	</div>
</section>

<!-- [popup Video] -->
<div class="remodal inscripcion" data-remodal-id="inscripcion">
	<div class="inscripVideo">
		<iframe width="100%" height="400px" src="https://www.youtube.com/embed/<?php the_field("ins-video"); ?>?rel=0&version=3&vq=hd1080" frameborder="0" allowfullscreen></iframe>
	</div>
</div>
<!-- [Fin popup] -->

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php get_footer(); ?>