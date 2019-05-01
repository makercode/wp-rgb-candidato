<?php
/**
 * Template Name: gracias
 */
?>

<?php get_header(); ?>
<span class="menu-span"></span>
<section class="secCont2 gracias">
	<div class="container">
		<div class="row">
			<div class="gracias-cont">
				<div class="col l12 m12 s12">
					<div class="titulo-cont1">
						<?php the_field("gra-titulo"); ?>
					</div>
				</div>
				<div class="col l7 m12 s12">
					<div class="gracias-txt">
						<?php the_field("gra-txt"); ?>
						<a class="btn-arrow" href="<?php the_field("gra-btnlink"); ?>" title="<?php the_field("gra-btn"); ?>">
							<?php the_field("gra-btn"); ?>
						</a>
					</div>
				</div>
				<div class="col l5 m12 s12">
					<div class="gracias-img">
						<?php $graimg=get_field("gra-img"); ?>
						<img src="<?php echo $graimg['url']; ?>" title="<?php the_field("gra-btn"); ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>