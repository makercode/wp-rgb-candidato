<?php get_header(); ?>
<section class="secCont2 univ">
	<div class="container">
		<div class="row">
			<div class="titulo-cont1 titulo-sinbull">
				<?php the_field("uci-titulo"); ?>
			</div>
			<div class="carrerap-contxt">
				<div class="camp-txt camp-txt-carreras">
					<?php the_field("uci-txt"); ?>
				</div>
			</div>
			<div class="univ-cont">
				<div class="univ-carusel">
				    <?php if( have_rows('uci-slist') ): ?>
				        <?php while( have_rows('uci-slist') ): the_row(); ?>
							<div class="univ-carusel-item" >
								<?php $ucisimg=get_sub_field("uci-simg"); ?>
								<?php if ($ucisimg) { ?>
									<figure>
										<img src="<?php echo $ucisimg['url']; ?>" title="<?php echo $ucisimg['title']; ?>">
									</figure>
								<?php }else{ ?>
									<?php if (false) { ?>
									<iframe id="youtube_player" width="100%" height="330" src="https://www.youtube.com/embed/<?php the_sub_field("uci-svid"); ?>?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0"  allowfullscreen="true" allowscriptaccess="always" frameborder="0"></iframe>
									<?php } ?>
									<div class="videOWL" style="width:100%;height:330px;">
										<a class="owl-video" href="https://www.youtube.com/watch?v=<?php the_sub_field("uci-svid"); ?>">
										</a>
									</div>
								<?php } ?>
							</div>
					    <?php endwhile; ?>
					<?php endif; ?>
				</div>

			</div>
		</div>
	</div>
	<div class="univ-list-sec">
		<div class="container">
			<div class="row">
				<div class="titulo-cont2">
					<?php the_field("uci-utitulo"); ?>
				</div>
				<div class="univ-list-cont">
					<ul>
						<?php $featured_post = get_field('uci-ulist'); ?>
						<?php if( $featured_post ): ?>
						<?php foreach( $featured_post as  $post ): ?>
					  	<?php setup_postdata($post); ?>
							<li>
								<a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>">
									<?php echo the_title(); ?>
								</a>
							</li>
						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div class="container">
			<div class="row">
				<div class="titulo-cont1 titulo-sinbull">
					<?php the_field("titulo_informacion_importante"); ?>
				</div>
				<div class="col-md-6">
					<?php the_field("contenido_izq"); ?>
				</div>
				<div class="col-md-6">
					<?php the_field("contenido_der"); ?>
				</div>
			</div>
			<div class="row">
				<div class="titulo-cont1 titulo-sinbull">
					<?php the_field("titulo_aeropuerto_de_llegada") ?>
				</div>
				<div class="col-md-12">
					<?php the_field("contenido_aeropuerto") ?>
				</div>
			</div>
			<div class="row">
				<div class="titulo-cont1 titulo-sinbull">
					<?php the_field("titulo_estadistica") ?>
				</div>
				<div class="col-md-12">
					<?php 
						$image = get_field('imagen_estadistica');
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?php the_field("mapa_de_ciudad") ?>
				</div>			
			</div>
		</div>
	</div>
	<div class="carrerap-coments">
		<div class="container">
			<div class="row">
				
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