<?php get_header(); ?>
<section class="secCont2 univs">
	<div class="container">
		<div class="row">
			<div class="titulo-cont1 titulo-sinbull">
				<?php the_field('ciun-titulo'); ?>
			</div>
			<div class="carrerap-contxt">
				<div class="camp-txt">
					<?php the_field('ciun-txt'); ?>
				</div>
				<div class="univs-contxt">
					<?php the_field('ciun-txt2'); ?>
				</div>
				<div class="camp-txt">.
					<h3> <strong> <?php _e('Mayor información sobre este Instituto','theme-text'); ?> </strong> </h3>
				</div>
				<div class="input-field input-fieldu">
					<select class="select-u">
						<option value="" disabled selected><?php the_field("ciun-fectitulo"); ?></option>
					    <?php if( have_rows('ciun-fecini') ): ?>
					        <?php while( have_rows('ciun-fecini') ): the_row(); ?>
								<option value="1"><?php the_sub_field("ciun-sfec"); ?></option>
						    <?php endwhile; ?>
						<?php endif; ?>
					</select>
				</div>
				<div class="input-field input-fieldu">
					<select class="select-u">
						<option value="" disabled selected><?php the_field("ciun-reqtitulo"); ?></option>
					    <?php if( have_rows('ciun-req') ): ?>
					        <?php while( have_rows('ciun-req') ): the_row(); ?>
								<option value="1"><?php the_sub_field("ciun-itemreq"); ?></option>
						    <?php endwhile; ?>
						<?php endif; ?>
					</select>
				</div>

			</div>

		</div>
	</div>
	<div class="univ-list-sec">
		<div class="container">
			<div class="row">
				<div class="titulo-cont2">
					<?php the_field('ciun-cititulo'); ?>
				</div>
				<div class="univs-cont">
					<div class="univ-carusel univ-carusel2">
					    <?php if( have_rows('ciun-cislider') ): ?>
					        <?php while( have_rows('ciun-cislider') ): the_row(); ?>
								<div class="univ-carusel-item">
									<?php $ciuncisliderimg=get_sub_field("ciun-cisliderimg"); ?>
									<?php if ($ciuncisliderimg) { ?>
										<figure>
											<img src="<?php echo $ciuncisliderimg['url']; ?>" title="<?php echo $ciuncisliderimg['title']; ?>">
										</figure>
									<?php }else{ ?>
										<?php if(false){ ?>
											<iframe width="100%" height="330" src="https://www.youtube.com/v/<?php the_sub_field("ciun-cislidervideo"); ?>?rel=0&version=3&hd=1&vq=hd720&quality=high" frameborder="0" allowfullscreen></iframe>
										<?php } ?>
										<div class="videOWL" style="width:100%;height:330px;">
											<a class="owl-video" href="https://www.youtube.com/watch?v=<?php the_sub_field("ciun-cislidervideo"); ?>">
											</a>
										</div>
									<?php } ?>
								</div>
						    <?php endwhile; ?>
						<?php endif; ?>
					</div>
					<div class="camp-txt univs-cont-txt">
						<h4><strong><?php the_field('ciun-btntitulo'); ?></strong></h4>
						<div class="univs-contbtn">
						    <?php if( have_rows('ciun-btnlist') ): ?>
						        <?php while( have_rows('ciun-btnlist') ): the_row(); ?>
									<a href="<?php the_sub_field('ciun-btnlistlink'); ?>" class="btn-arrow-mini">
										<?php the_sub_field('ciun-btnlistnom'); ?>
									</a>
							    <?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="carrerap-coments">
		<div class="container">
			<div class="row">
				<div class="carrerap-comentsitem">
					<?php the_field('ciun-coments'); ?> 
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