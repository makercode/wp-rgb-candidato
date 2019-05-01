<?php
/**
 * Template Name: Inicio
 */
	$links_de_tipos_de_estudio = get_field('links_de_tipos_de_estudio');
	$todos_tipos_de_estudio = "";

	if( have_rows('links_de_tipos_de_estudio') ):
	 	// loop through the rows of data
	    while ( have_rows('links_de_tipos_de_estudio') ) : the_row();
	        // display a sub field value
	        $todos_tipos_de_estudio .= "
			<li>
				<a class='carreras-item' href=".get_sub_field('link_a_tipo_de_estudio')." title='<?php the_title(); ?>'>
					<figure><img src='".get_template_directory_uri()."/img/plantilla/marco_azul.png' alt='' title=''>
						<div class='car-titulo'>
							<h3>".get_sub_field('nombre_de_tipo_de_estudio')."</h3>
						</div>
					</figure>
				</a>
			</li>";
	    endwhile;
	else :
	endif;

  /* Campos de Slider */
  $boton_menu = get_field('i-slider');
  /* Sliders */
  $todos_sliders = "";
  if( have_rows($boton_menu) ):
    // loop through the rows of data
    while ( have_rows('lang_pages', 'option') ) : the_row();
      // display a sub field value
      $isliderimg=get_sub_field("i-slider-img"); 
      $todos_sliders .= "
      <div class='slider-item' style='background:url(".$isliderimg['url'].") center;'>
        <div class=''>
        </div>
        <div class=''>
        </div>
        <div class='slider-cap'>
          <div class="titulo-primario">".get_sub_field("titulo_slide")."
            <a href=".get_field("i-btnlink")." title=".get_field("i-btnnom")." class='btn-ico waves-effect waves'>".get_field("i-btnnom")."</a>
          </div>
        </div>
      </div>";
    endwhile;
  else :
  endif;
?>

<?php get_header(); ?>
<section class="slider-cont z-depth-2" >
    <div class="slider-alar">
		<?php if( have_rows('i-slider') ): ?>
			<?php while( have_rows('i-slider') ): the_row(); ?>
				<?php $isliderimg=get_sub_field("i-slider-img"); ?>
				<div class="slider-item" style="background:url('<?php echo $isliderimg['url']; ?>') center;">
					<div class="top-degree">
					</div>
					<div class="bottom-degree">
					</div>
				    <div class="slider-cap">
				        <div class="titulo-primario">
				            <?php the_sub_field("titulo_slide");  ?>
										<a href="<?php the_field("i-btnlink");  ?>" title="<?php the_field("i-btnnom");  ?>" class="btn-ico waves-effect waves" style="font-weight:bold;">
				                <?php the_field("i-btnnom");  ?>
				            </a>
				        </div>
				    </div>
	        </div>
			<?php endwhile; ?>
		<?php endif; ?>
    </div>
</section>
<section class="secCont beneficios">
	<div class="container">
		<div class="titulo-cont2">
			<?php the_field('ib-titulo'); ?> 
		</div>
		<div class="beneficios-cont">
			<ul class="row">
		    <?php if( have_rows('ib-list') ): ?>
		        <?php while( have_rows('ib-list') ): the_row(); ?>
					<li>
						<div class="benef-item">
							<figure>
								<?php $ibitemimg=get_sub_field("ib-itemimg"); ?>
								<img src="<?php echo $ibitemimg['url']; ?>" alt="<?php the_sub_field('ib-itemtitulo'); ?>" title="<?php the_sub_field('ib-itemtitulo'); ?>">
							</figure>
							<div class="benef-titulo">
								<h3><?php the_sub_field('ib-itemtitulo'); ?></h3>
							</div>
						</div>
					</li>
			    <?php endwhile; ?>
			<?php endif; ?>
			</ul>
		</div>
	</div>
</section>

<section id="carreras" class="secCont carreras">
	<div class="container">
		<div class="titulo-cont2">
			<?php the_field('ic-titulo'); ?> 
		</div>
		<ul class="carreras-cont">
			<?php echo $todos_tipos_de_estudio; ?>


		</ul>
	</div>
</section>
<section class="secCont vacantes">
	<div class="container">
		<div class="row">
			<div class="titulo-cont2">
				<?php the_field('iv-titulo'); ?> 
			</div>
		</div>
		<div class="vacantes-list">
			<div class="vacantes-list-titulo">
				<?php the_field('iv-subtitulo'); ?> 
			</div>
			<ul>
			    <?php if( have_rows('iv-list') ): ?>
			        <?php while( have_rows('iv-list') ): the_row(); ?>
						<li>
							<div class="vacante-list">
								<h4><?php the_sub_field('iv-itempais'); ?></h4>
								<div class="vactotal"><?php the_sub_field('iv-itemvac'); ?></div>
								<div class="vactotal2"><p><?php the_sub_field('iv-itemvacdis'); ?></p></div>
							</div>
						</li>
				    <?php endwhile; ?>
				<?php endif; ?>
			</ul>
			<div class="vacante-lastlist">
				<div class="vacante-list">
					<h4><?php the_field('iv-vacantes'); ?></h4>
					<p><span><?php the_field('iv-vacantestotal'); ?></span><strong><?php the_field('iv-vacantesdis'); ?></strong></p>
					<span class="aclaracion"><?php the_field('vacantes_en_otros_paises_aclaracion'); ?></span>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="secCont testimonial">
	<div class="container">
		<div class="row">
			<div class="titulo-cont2">
				<?php the_field('it-titulo'); ?> 
			</div>
			<div class="testimonial-cont test-carrusel">
			    <?php if( have_rows('it-list') ): ?>
			        <?php while( have_rows('it-list') ): the_row(); ?>
						<div class="testimonial-item">
							<figure>
								<?php $ititemfoto=get_sub_field('it-itemfoto'); ?>
								<img src="<?php echo $ititemfoto['url']; ?>" alt="<?php echo $ititemfoto['title']; ?>" title="<?php echo $ititemfoto['title']; ?>">
							</figure>
							<div class="t-camp-txt">
								<?php the_sub_field('it-itemtxt'); ?>
							</div>
						</div>
				    <?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>	
</section>
<section class="secCont">
	<div class="container">
		<div class="lema">
			<?php the_field('it-frase'); ?>
		</div>
		<a href="<?php the_field('it-btnlink'); ?>" title="<?php the_field('it-btnnom'); ?>" class="btn-ico-img waves-effect waves">
			<i>
				<img src="<?php echo get_template_directory_uri() ?>/img/plantilla/icono_boton_banner.svg">
			</i>
			<?php the_field('it-btnnom'); ?>
		</a>
	</div>
</section>
<?php get_footer(); ?>