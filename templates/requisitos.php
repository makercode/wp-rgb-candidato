<?php
/**
 * Template Name: Requisitos
 */
?>

<?php get_header(); ?>
<section class="secCont2 preg">
	<div class="container">
		<div class="row">
			<div class="titulo-cont1 titulo-sinbull">
				<?php the_field('req-titulo'); ?> 
			</div>
			<div class="preg-cat">
				<ul>
					<?php $creq=0 ?>
				    <?php if( have_rows('req-cat') ): ?>
				        <?php while( have_rows('req-cat') ): the_row(); ?>
							<li class="preg-cat-item">
								<a href="#req<?php echo $creq+1; ?>" alt="<?php the_sub_field('req-ctitulo'); ?>" title="<?php the_sub_field('req-ctitulo'); ?>">
									<?php $reqcico=get_sub_field("req-cico"); ?>
									<img src="<?php echo $reqcico['url']; ?>" alt="<?php the_sub_field('req-ctitulo'); ?>" title="<?php the_sub_field('req-ctitulo'); ?>">
									<h2><?php the_sub_field('req-ctitulo'); ?></h2>
								</a>
							</li>
							<?php $creq++; ?>
					    <?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
			<?php $rreq=0 ?>
		    <?php if( have_rows('req-cat') ): ?>
		        <?php while( have_rows('req-cat') ): the_row(); ?>
					<div class="col l12 m12 s12">
						<div id="req<?php echo $rreq+1; ?>" class="preg-preglist">
							<h3>
							<?php $reqcico=get_sub_field("req-cico"); ?>
							<img src="<?php echo $reqcico['url']; ?>" alt="<?php the_sub_field('req-ctitulo'); ?>" title="<?php the_sub_field('req-ctitulo'); ?>">
								<?php the_sub_field('req-ctitulo'); ?>
							</h3>
						  <ul class="collapsible preg-acor" data-collapsible="accordion">
						    <?php if( have_rows('req-cplist') ): ?>
						        <?php while( have_rows('req-cplist') ): the_row(); ?>
							    <li class="active">
							      <div class="collapsible-header active"><?php the_sub_field('req-cplistpreg'); ?></div>
							      <div class="collapsible-body camp-txt">
						      		<?php the_sub_field('req-cplistres'); ?>
							      </div>
							    </li>
							    <?php endwhile; ?>
							<?php endif; ?>
						  </ul>
						</div>
					</div>
					<?php $rreq++; ?>
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