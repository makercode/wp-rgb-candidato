<?php
/**
 * Template Name: Alar
 */
?>

<?php get_header(); ?>
<div>
    <br>
    <br>
    <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
</div>
<section class="secCont2 alar">
	<div class="container">
		<div class="row">
			<div class="titulo-cont1 titulo-sinbull">
				<?php the_field("sa-titulo"); ?>
			</div>
			<div class="alar-cont">
				<div class="col l6 m12 s12 alar-txt1">
					<div class="camp-txt">
						<?php the_field("sa-camp1"); ?>
					</div>
				</div>
				<div class="col l6 m12 s12 alar-txt2">
					<div class="camp-txt">
						<?php the_field("sa-camp2"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="staff">
	<div class="container">
		<div class="row">
			<div class="titulo-cont2">
				<?php the_field("sas-titulo"); ?>
			</div>
			<ul class="staf-list">
				<?php $stafittem = 0 ?>
			    <?php if( have_rows('sas-staflist') ): ?>
			        <?php while( have_rows('sas-staflist') ): the_row(); ?>
						<li>
							<a href="#staff<?php echo $stafittem+1; ?>" target="_self" title="<?php the_sub_field('sas-itemnom'); ?>" class="staff-item">
								<figure>
									<?php $sasitemfoto=get_sub_field("sas-itemfoto"); ?>
									<img src="<?php echo $sasitemfoto['url']; ?>" alt="<?php the_sub_field('sas-itemnom'); ?>" title="<?php the_sub_field('sas-itemnom'); ?>">
								</figure>
								<span class="staff-itemcirc"></span>
								<div class="staff-itemcirc2">
									<h3 class="staffname"><?php the_sub_field('sas-itemnom'); ?></h3>
								</div>
							</a>
							<div class="remodal" data-remodal-id="staff<?php echo $stafittem+1;  ?>">
								<div class="staff-remodal">
									<figure>
										<img src="<?php echo $sasitemfoto['url']; ?>" alt="<?php the_sub_field('sas-itemnom'); ?>" title="<?php the_sub_field('sas-itemnom'); ?>">
									</figure>
									<div class="remodaltxt">
										<h4><?php the_sub_field('sas-itemnom'); ?></h4>
										<div class="camp-txt">
											<p>
												<?php the_sub_field('sas-itemtxt'); ?>
											</p>
										</div>
									</div>
								</div>
							</div>
						</li>
						<?php $stafittem++; ?>
				    <?php endwhile; ?>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="convenio">
				<div class="titulo-cont2">
					<?php the_field("sac-titulo"); ?>
				</div>
				<ul class="collapsible convenios-acor" data-collapsible="accordion">
					<?php if( have_rows('sac-list') ): ?>
						<?php $paisconvenioitem = 0 ?>
					    <?php while( have_rows('sac-list') ): the_row(); ?>
						    <li class="active">
								<div class="collapsible-header active"><?php the_sub_field('sac-listtitulo'); ?></div>
								<div class="collapsible-body">
									<ul class="convenios-sublinks">
										<?php $convenioitem = 0 ?>
										<?php if( have_rows('sac-sublist') ): ?>
										    <?php while( have_rows('sac-sublist') ): the_row(); ?>
												<li>
													<a href="#convenio-<?php echo $paisconvenioitem?>-<?php echo $convenioitem+1; ?>" title="<?php the_sub_field('sac-sublisttitulo'); ?>">
														<?php the_sub_field('sac-sublisttitulo'); ?>
													</a>
													<div class="remodal" data-remodal-id="convenio-<?php echo $paisconvenioitem?>-<?php echo $convenioitem+1; ?>">
														<div class="convenio-remodal">
															<div class="remodaltxt">
																<h4>
																	<?php the_sub_field('sac-sublisttitulo'); ?>
																</h4>
																<div class="camp-txt">
																	<p>
																		<?php the_sub_field('sac-sublistext'); ?>
																	</p>
																</div>
															</div>
															<a href="<?php the_sub_field('sac-sublistpdf'); ?>"  title="<?php the_sub_field('sac-sublisttitulo'); ?>">
																<figure>
																	<?php $sacsublisimg=get_sub_field("sac-sublisimg"); ?>
																	<img src="<?php echo $sacsublisimg['url']; ?>" alt="<?php the_sub_field('sac-sublisttitulo'); ?>" title="<?php the_sub_field('sac-sublisttitulo'); ?>">
																</figure>
															</a>
														</div>
													</div>
												</li>
												<?php $convenioitem++; ?>
										    <?php endwhile; ?>
										<?php endif; ?>
									</ul>
								</div>
						    </li>
							<?php $paisconvenioitem++; ?>
					    <?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
</section>

<style>#elemento_text_overflow{text-overflow: ellipsis; -moz-text-overflow: ellipsis; -webkit-text-overflow: ellipsis; -o-text-overflow: ellipsis; border: 1px solid #000000; font-family: trebuchet, verdana, arial; padding: 20px; text-align: center; width: 200px; white-space:nowrap; overflow:hidden;}</style>
<section class="ferias">
	<div class="container">
		<div class="row">
			<div class="titulo-cont2">
				<?php the_field("saf-titulo"); ?>
			</div>
			<ul class="ferias-list">
				<?php $feriaitem = 0 ?>
				<?php if( have_rows('saf-list') ): ?>
				    <?php while( have_rows('saf-list') ): the_row(); ?>
						<li class="col l4 m6 s12 prueba">
							<a href="#ferias<?php echo $feriaitem+1; ?>" title="<?php the_sub_field('saf-itemtitulo'); ?>" class="ferias-item">
								<figure>
									<?php $safitemimg=get_sub_field("saf-itemimg"); ?>
									<img src="<?php echo $safitemimg['url']; ?>" alt="<?php the_sub_field('saf-itemtitulo'); ?>" title="<?php the_sub_field('saf-itemtitulo'); ?>">
								</figure>
								<div class="feria-titulo">
									<h3 class="truncate"><?php the_sub_field('saf-itemtitulo'); ?></h3>
								</div>
								<?php if (false) { ?>
								<div class="feria-titulo feria-titulo2">
									<h3><?php the_sub_field('saf-itemtitulo'); ?></h3>
								</div>
								<?php } ?>
							</a>
							<div class="remodal" data-remodal-id="ferias<?php echo $feriaitem+1; ?>">
								<div class="ferias-remodal">
									<div class="remodaltxt">
										<h4><?php the_sub_field('saf-itemtitulo'); ?></h4>
										<div class="camp-txt">
											<p>
												<?php the_sub_field('saf-itemtxt'); ?>
											</p>
										</div>
									</div>
									<figure>
										<img src="<?php echo $safitemimg['url']; ?>" alt="<?php the_sub_field('saf-itemtitulo'); ?>" title="<?php the_sub_field('saf-itemtitulo'); ?>">
									</figure>
								</div>
							</div>
						</li>
						<?php $feriaitem++; ?>
				    <?php endwhile; ?>
				<?php endif; ?>
			</ul>
			<!-- <a href="javascript:void(0)" class="btn-txt" title="Estuvimos en más ferias">
				Estuvimos en más ferias
			</a> -->
			
		</div>
	</div>
</section>   
 
    <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
    <br> 
    <br>
    <br>
    <br>

    <div class="carrerap-coments">
        <div class="container">
            <div class="row">
                <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5"></div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>