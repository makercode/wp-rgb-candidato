<?php
/**
 * Template Name: Contacto
 */
?>

<?php get_header(); ?>
<section class="secCont2 contacto">
	<div class="container">
		<div class="row">
			<div class="titulo-cont1 titulo-sinbull">
				<?php the_field("contac-titulo"); ?>
			</div>
			<div class="form-content">
				<?php $form_this = get_field("formulario_de_contacto"); ?>
				<?php echo do_shortcode( $form_this ); ?>

			</div>
		</div>
	</div>
	<div class="contacto-maps">
		<div class="container">
			<div class="row">
				<div class="titulo-cont2 ">
					<?php the_field("contac-stitulo"); ?>
				</div>

			    <div class="col s12">
			      <ul id="contacto-tab" class="tabs contacto-tab">
			      	<?php $lpais=0 ?>
				    <?php if( have_rows('contac-of') ): ?>
				        <?php while( have_rows('contac-of') ): the_row(); ?>
					        <li class="tab">
					        	<a class="active-2" href="#pais<?php echo $lpais+1;  ?>">
					        		<figure>
					        			<?php $contacofico=get_sub_field("contac-ofico"); ?>
					        			<img src="<?php echo $contacofico['url']; ?>" alt="<?php the_field("contac-ofpais"); ?>" title="<?php the_field("contac-ofpais"); ?>">
					        		</figure>
					        		<div class="contacto-tabtitulo">
					        			<h3><?php the_sub_field("contac-ofpais"); ?></h3>
					        		</div>
					        	</a>
					        </li>
					        <?php $lpais++; ?>
					    <?php endwhile; ?>
					<?php endif; ?>
			      </ul>
			    </div>
			    <?php $tpais=0 ?>
	    <?php if( have_rows('contac-of') ): ?>
	        <?php while( have_rows('contac-of') ): the_row(); ?>
			    <div id="pais<?php echo $tpais+1;  ?>" class="col s12">
			    	<div class="contacto-tabcont">
			    		<div class="col l6 m12 s12">
			    			<div class="contacto-tabtxt">
			    				<div class="titulo-pais">
				    				<h3>
				    					<i>
				    						<?php $contacofico2=get_sub_field("contac-ofico2"); ?>
				    						<img src="<?php echo $contacofico2['url']; ?>" title="<?php the_sub_field("contac-oftitulo"); ?>">
				    					</i>
				    					<?php the_sub_field("contac-oftitulo"); ?>
				    				</h3>
			    				</div>
			    				<?php the_sub_field("contac-ofcarac"); ?>
			    			</div>
			    		</div>
			    		<div class="col l6 m12 s12">
			    			<div class="oficina-pais">
			    				<a href="<?php the_sub_field("contac-ofmaps"); ?>" title="<?php the_sub_field("contac-oftitulo"); ?>">
				    				<figure>
				    					<?php $contacofimg=get_sub_field("contac-ofimg"); ?>
				    					<img src="<?php echo $contacofimg['url']; ?>" alt="<?php echo $contacofimg['title']; ?>" title="<?php echo $contacofimg['title']; ?>">
				    				</figure>
			    				</a>
				    			<a href="<?php the_sub_field("contac-ofmaps"); ?>" class="oficina-link">
				    				<strong><?php the_sub_field("contac-oftxt"); ?></strong>
				    			</a>
			    			</div>
			    		</div>
			    	</div>
			    </div>
			    <?php $tpais++; ?>
		    <?php endwhile; ?>
		<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<section class="secCont">
	<div class="container">
		<div class="lema">
			<?php the_field("contac-frase"); ?>
		</div><br>
		<a href="<?php the_field("contac-frasebtnlink"); ?>" title="<?php the_field("contac-fbtn"); ?>" class="btn-ico-img waves-effect waves">
			<i>
				<img src="<?php echo get_template_directory_uri() ?>/img/plantilla/icono_boton_banner.svg">
			</i>
			<?php the_field("contac-fbtn"); ?>
		</a>
	</div>
</section>
<?php get_footer(); ?>