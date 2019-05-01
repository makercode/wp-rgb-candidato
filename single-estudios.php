<?php get_header(); ?>
<section class="secCont2 carrerap">
	<div class="container">
		<div class="row">
			<div class="titulo-cont1 titulo-sinbull">
				<?php the_field("pe-titulo"); ?>
				<div class="camp-txt">
					<?php the_field("pe-txt"); ?>
				</div>
			</div>
			<div class="carrerap-listcont">
				<div class="carrerap-list">
					<div class="carrera-listitem">
						<h3><?php the_field("pe-durtitulo"); ?></h3>
						<ul>
						    <?php if( have_rows('pe-listdur') ): ?>
						        <?php while( have_rows('pe-listdur') ): the_row(); ?>
									<li>
										<h4><?php the_sub_field('pe-listdurtitulo'); ?></h4>
										<small><?php the_sub_field('pe-listdurstitulo'); ?></small>
									</li>
							    <?php endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>
					<div class="carrera-listitem">
						<h3><?php the_field("pe-idiotitulo"); ?></h3>
						<ul>
						    <?php if( have_rows('pe-listidio') ): ?>
						        <?php while( have_rows('pe-listidio') ): the_row(); ?>
									<li>
										<h4><?php the_sub_field('pe-listidiotitulo'); ?></h4>
										<small><?php the_sub_field('pe-listidiostitulo'); ?></small>
									</li>
							    <?php endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>
				</div>
				<div class="carrerap-nota">
					<div class="camp-txt">
						<p>
							<?php the_field("pe-nota"); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="secCont2 inscrip">
		<div class="container">
			<div class="row">
				<div class="incrip-pdf">
					<div class="col l8 m12 s12">
						<div class="inscrip-pdftxt">
							<?php the_field("ins-pdftxt"); ?>
						</div>
					</div>
					<div class="col l4 m12 s12">
						<a href="<?php $image = get_field('ins-pdfarch'); echo $image['url']; ?>" class="btn-ico-img waves-effect waves" title="<?php the_field("ins-pdfbtn"); ?>">
							<i>
								<img src="<?php echo get_template_directory_uri() ?>/img/plantilla/icono_descarga-01.svg">
							</i>
							<?php the_field("ins-pdfbtn"); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="carrerap-cont">
		<div class="container">
			<div class="row">
				<div class="titulo-cont2">
					<?php the_field("pe-carreratitulo"); ?>
				</div>
				<ul class="collapsible carrerap-acor" data-collapsible="expandable">
				    <?php if( have_rows('pe-esplist') ): ?>
				    	<input type="text" placeholder="<?php _e('Escribe aquí el programa para una búsqueda rápida','theme-text'); ?> " class="filter-estudio">
				        <?php while( have_rows('pe-esplist') ): the_row(); ?>
							<li class="active">
								<div class="collapsible-header active"><?php the_sub_field("pe-esplisttitulo"); ?></div>
								<div class="collapsible-body">
									<ul class="collapsible2 carrerap-subacor" data-collapsible="expandable">
										<?php if( have_rows('pe-carreralist') ): ?>
										    <?php while( have_rows('pe-carreralist') ): the_row(); ?>
												<li>
													<div class="collapsible-header carrerap-subacorli active"><?php the_sub_field("pe-carreralisttitulo"); ?></div>
													<div class="collapsible-body">
														<ul class="carrerap-subacor2 lm">
															<?php $featured_post = get_sub_field('pe-universidades'); ?>
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
												</li>
										    <?php endwhile; ?>
										<?php endif; ?>
									</ul>
								</div>
							</li>
					    <?php endwhile; ?>
					<?php endif; ?>
					<!-- <li class="active">
						<div class="collapsible-header active">Humanidades</div>
						<div class="collapsible-body">
							<ul class="collapsible2 carrerap-subacor" data-collapsible="expandable">
								<li>
									<div class="collapsible-header carrerap-subacorli active">Carrera 1</div>
									<div class="collapsible-body">
									<ul class="carrerap-subacor2">
										<li>
											<a href="carreras-single.php" title="Universidad 1">
												Universidad 1
											</a>
										</li>
										<li>
											<a href="carreras-single.php" title="Universidad 2">
												Universidad 2
											</a>
										</li>
									</ul>
									</div>
								</li>
							</ul>
						</div>
					</li> -->
				</ul>
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