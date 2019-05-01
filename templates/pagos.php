<?php
/**
 * Template Name: pagos
 */
?>

<?php get_header(); ?>
<section class="secCont2">
	<div class="container">
		<div class="row">
			<div class="col l12 m12 s12">
				<?php the_content(); ?>
			</div>
			<div class="col l12 m12 s12">
				<?php the_field("gra-titulo"); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>