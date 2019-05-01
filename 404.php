<?php get_header(); ?>
<span class="menu-span"></span>
<section class="secCont2 gracias">
	<div class="container">
		<div class="row">
			<div class="gracias-cont">
			<?php
			$args = array(
			    'post_type' => 'informacion',
			    'posts_per_page' => '-1'
			);
			?>
			<?php $the_query = new WP_Query($args); ?>
			<?php if ($the_query->have_posts()) : ?>
			    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
				<div class="col l7 m12 s12">
					<div class="titulo-cont1">
						<?php the_field("error-titulo"); ?>
					</div>
					<div class="gracias-txt">
						<?php the_field("error-txt"); ?>
						<a class="btn-arrow" href="<?php the_field("error-btnlink"); ?>" title="<?php the_field("error-btnnom"); ?>">
							<?php the_field("error-btnnom"); ?>
						</a>
					</div>

				</div>
				<div class="col l5 m12 s12">
					<div class="gracias-img">
						<?php $errorimg=get_field("error-img"); ?>
						<img src="<?php echo $errorimg['url']; ?>" title="<?php the_field("error-btnnom"); ?>">
					</div>
				</div>
			    <?php endwhile; ?>
			    <?php wp_reset_postdata(); ?>
			<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>