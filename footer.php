
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
    <section class="newsletter secCont">
        <div class="container">
            <div class="row">
            <?php
            $args = array(
                'post_type' => 'informacion',
                'posts_per_page' => '-1'
            );
            ?>
            <?php $the_query = new WP_Query($args); ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="col l5 m12 s12">
                    <div class="ns-item">
                        <?php the_field( "f-txtder");  ?>
                    </div>
                </div>
                <div class="col l2 m12 s12">
                    <figure class="ns-img">
                        <?php $fImg=get_field("f-img"); ?>
                        <img src="<?php echo $fImg['url'];?>" alt="<?php echo $fImg['title'];?>" title="<?php echo $fImg['title'];?>">
                    </figure>
                </div>
                <div class="col l5 m12 s12 fsuscripcion">
                    <?php if (true) { ?>
                        <?php the_field( "formulario_de_suscripcion");  ?>
                        <?php /* echo do_shortcode( '[contact-form-7 id="516" title="Newsletter"]' ); */ ?>
                    <?php } ?>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            </div>
        </div>
    </section>

    <?php
    $args = array(
        'post_type' => 'informacion',
        'posts_per_page' => '-1'
    );
    ?>
    <?php $the_query = new WP_Query($args); ?>
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <?php if (true) { ?>
                <footer>
                    <?php the_field( "f-copy");  ?>
                </footer>
                <?php /* echo do_shortcode( '[contact-form-7 id="516" title="Newsletter"]' ); */ ?>
            <?php } ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

	<!--[ Jquery ]-->
	<script src="<?php echo get_template_directory_uri() ?>/js/jquery.js"></script>
    <script src="http://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>

    <!--[ Materialize ]-->
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/materialize.min.js"></script>
    <!-- [ Myapp ] -->
    <script src="<?php echo get_template_directory_uri() ?>/js/myapp.js"></script>
    <!--[ Animacion Wow ]-->
    <script src="<?php echo get_template_directory_uri() ?>/js/anim.js"></script>
    <!--[ Carusel ]-->
    <script src="<?php echo get_template_directory_uri() ?>/js/carusel.js"></script>
    <!--[ Validador ]-->
    <script src="<?php echo get_template_directory_uri() ?>/js/validate.js"></script>
    <!--[ Scroll Bar ]-->
    <script src="<?php echo get_template_directory_uri() ?>/js/scroll.js"></script>
    <!--[ Head scroll ]-->
    <script src="<?php echo get_template_directory_uri() ?>/js/headScroll.js"></script>
    <!--[ Remodal ]-->
    <script src="<?php echo get_template_directory_uri() ?>/js/remodal.js"></script>

    <script src="<?php echo get_template_directory_uri() ?>/js/jQuery.MultiFile.min.js"></script>


    <?php
    $args = array(
        'post_type' => 'informacion',
        'posts_per_page' => '-1'
    );
    ?>
    <?php $the_query = new WP_Query($args); ?>
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <script>
                $(document).on('ready',function() {
                    $('#nscorreo').attr("placeholder", "<?php the_field('fsus-inputext') ?>");
                    $('.nsbtn').html("<?php the_field('fsus-inputbtn') ?>");
                });
            </script>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>


    <script>
    //-------------- [ Carusel Universal ] --------------//
    var owl = $('.univ-carusel');
    owl.owlCarousel({
        items:1,
        merge:true,
        loop:true,
        margin:0,
        autoplay: true,
        lazyLoad: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        video:true,
        lazyLoad:true,
        responsive: {
            0: {
                items: 1,
                dots: false,
                nav:false
            },
            600: {
                items: 1,
                dots: false,
                nav: true
            }
        }
    });

    //-------------- [ Carusel Universal ] --------------//
        (function() {


			$('.multi').MultiFile({
				list: '#multi-list'
			});
            var normalize = (function() {
              var from = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç", 
                  to   = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc",
                  mapping = {};
             
              for(var i = 0, j = from.length; i < j; i++ )
                  mapping[ from.charAt( i ) ] = to.charAt( i );
             
              return function( str ) {
                  var ret = [];
                  for( var i = 0, j = str.length; i < j; i++ ) {
                      var c = str.charAt( i );
                      if( mapping.hasOwnProperty( str.charAt( i ) ) )
                          ret.push( mapping[ c ] );
                      else
                          ret.push( c );
                  }      
                  return ret.join( '' );
              }
            })();

            $(".filter-estudio").keyup(function () {
                var filter = $(this).val().toUpperCase(), 
                    count = 0;
                filter = normalize(filter);
                console.log(filter);
                
                $(".carrerap-acor > li").addClass("active");
                $(".carrerap-acor > li > .collapsible-header").addClass("active");
                $(".carrerap-acor > li > .collapsible-body").show();

                $(".carrerap-subacorli").closest("li").show();
                $(".carrerap-subacorli").each(function () {
                    var parent = $(this).closest(".carrerap-subacor"), 
                        length = $(this).text().length>0,
                        text = $(this).text().toUpperCase(),
                        text = normalize(text);
                        $this_closest = $(this).closest("li");
                    if (text.indexOf(filter)>=0 ) {
                        $this_closest.removeClass("hide");
                        $this_closest.addClass("show");
                    }else {
                        $this_closest.hide();
                        $this_closest.addClass("hide");
                        $this_closest.removeClass("show");
                    };

                });

                $(".carrerap-acor > li").each(function () {
                    $number_show = $(this).find(".carrerap-subacor li.show").length;
                    if ($number_show>0 ) {
                        $(this).show();
                    }else {
                        $(this).hide();
                    };

                });

            });

            $('input.file').change(function(e){
                $this=$(this);
                $container = $this.closest(".fileinputs");
                $file_val = $this.closest(".file_val");
                $container_val = $this.closest(".file").val().split('\\').pop();
                $input_cont = $container.find(".fakefile").find("input");
                $input_cont.val($container_val);
                console.log($container_val);
            });

            // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
            if (!String.prototype.trim) {
                (function() {
                    // Make sure we trim BOM and NBSP
                    var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                    String.prototype.trim = function() {
                        return this.replace(rtrim, '');
                    };
                })();
            }

            [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
                // in case the input is already filled..
                if( inputEl.value.trim() !== '' ) {
                    classie.add( inputEl.parentNode, 'input--filled' );
                }

                // events:
                inputEl.addEventListener( 'focus', onInputFocus );
                inputEl.addEventListener( 'blur', onInputBlur );
            } );
            [].slice.call( document.querySelectorAll( 'textarea.input__field' ) ).forEach( function( inputEl ) {
                // in case the input is already filled..
                if( inputEl.value.trim() !== '' ) {
                    classie.add( inputEl.parentNode, 'input--filled' );
                }

                // events:
                inputEl.addEventListener( 'focus', onInputFocus );
                inputEl.addEventListener( 'blur', onInputBlur );
            } );

            function onInputFocus( ev ) {
                classie.add( ev.target.parentNode, 'input--filled' );
            }

            function onInputBlur( ev ) {
                if( ev.target.value.trim() === '' ) {
                    classie.remove( ev.target.parentNode, 'input--filled' );
                }
            }
        })();
    </script>
    <?php wp_footer(); ?>

    <style>
        .ierror_col .input__label--yoko::after{
            background: #f4a10e !important;
        }
        .ierror_col .input__label--yoko::before {
            content: '';
            position: absolute;
            bottom: 100%;
            left: 0;
            width: 100%;
            height: 50px;
            background: rgba(244, 161, 14, 0.2);
            border-bottom: 1px solid #f4a10e;
        }
    </style>
</body>
</html>