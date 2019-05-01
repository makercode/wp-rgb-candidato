<?php
/**
 * Template Name: Terminos y condiciones
 */
?>

<?php get_header(); ?>
<section class="secCont2 preg">
	<div class="container">
		<div class="row">
			<div class="titulo-cont1 titulo-sinbull">
				<?php the_field('term-titulo'); ?>
			</div>
			<div class="terminos-cont">
				<div class="camp-txt">
					<?php the_field('term-txt'); ?>
				</div>
				<a href="<?php the_field("term-btnlink");  ?>" title="<?php the_field("term-btnnom");  ?>" class="btn-ico waves-effect waves" style="font-weight:bold;margin-top:10px;">
	                <?php the_field("term-btnnom");  ?>
	            </a>
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