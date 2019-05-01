<?php
/**
 * Template Name: Preguntas frecuentes
 */
?>
<?php get_header(); ?>
<section class="secCont2 preg">
	<div class="container">
		<div class="row">
			<div class="titulo-cont1 titulo-sinbull">
				<?php the_field('pfr-titulo'); ?> 
			</div>

			<div class="preg-cat">
				<ul>
					<?php $cpreg=0 ?>
				    <?php if( have_rows('pfr-catlist') ): ?>
				        <?php while( have_rows('pfr-catlist') ): the_row(); ?>
							<li class="preg-cat-item">
								<a href="#req<?php echo $cpreg+1; ?>" alt="<?php the_sub_field('pfr-ccat'); ?>" title="<?php the_sub_field('pfr-ccat'); ?>">
									<?php $pfrcico=get_sub_field("pfr-cico"); ?>
									<img src="<?php echo $pfrcico['url']; ?>" alt="<?php the_sub_field('pfr-ccat'); ?>" title="<?php the_sub_field('pfr-ccat'); ?>">
									<h2><?php the_sub_field('pfr-ccat'); ?></h2>
								</a>
							</li>
							<?php $cpreg++; ?>
					    <?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
			<?php $rpreg=0 ?>
		    <?php if( have_rows('pfr-catlist') ): ?>
		        <?php while( have_rows('pfr-catlist') ): the_row(); ?>
					<div class="col l6 m12 s12">
						<div id="req<?php echo $rpreg+1; ?>" class="preg-preglist">
							<h3>
							<?php $pfrcico=get_sub_field("pfr-cico"); ?>
							<img src="<?php echo $pfrcico['url']; ?>" alt="<?php the_sub_field('pfr-ccat'); ?>" title="<?php the_sub_field('pfr-ccat'); ?>">
								<?php the_sub_field('pfr-ccat'); ?>
							</h3>
						  <ul class="collapsible preg-acor" data-collapsible="accordion">
						    <?php if( have_rows('pfr-cpreglist') ): ?>
						        <?php while( have_rows('pfr-cpreglist') ): the_row(); ?>
							    <li class="active">
							      <div class="collapsible-header active"><?php the_sub_field('pfr-cpreg'); ?></div>
							      <div class="collapsible-body camp-txt">
						      		<?php the_sub_field('pfr-cres'); ?>
							      </div>
							    </li>
							    <?php endwhile; ?>
							<?php endif; ?>
						  </ul>
						</div>
					</div>
					<?php $rpreg++; ?>
			    <?php endwhile; ?>
			<?php endif; ?>
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