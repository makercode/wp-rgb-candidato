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
                        <?php echo do_shortcode( '[contact-form-7 id="516" title="Newsletter"]' ); ?>
                    <?php } ?>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            </div>
        </div>
    </section>
    <footer>
        <div class="follow-cont">
            <div class="container">
                <?php the_field( "f-rtitulo");  ?>
                <ul class="follow">
                <?php
                $args = array(
                    'post_type' => 'informacion',
                    'posts_per_page' => '-1'
                );
                ?>
                <?php $the_query = new WP_Query($args); ?>
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li>
                        <a href="<?php the_field( "h-fb");  ?>" target="blank" title="Facebook" alt="Facebook" class="btn-follow fb-img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/plantilla/icono_facebook.svg" alt="Facebook" title="Facebook">
                        </a>
                    </li>
                    <li>
                        <a href="<?php the_field( "h-tw");  ?>" target="blank" title="Twitter" alt="Twitter" class="btn-follow tw-img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/plantilla/icono_twitter.svg" alt="Twitter" title="Twitter">
                        </a>
                    </li>
                    <li>
                        <a href="<?php the_field( "h-yt");  ?>" target="blank" title="Youtube" alt="Youtube" class="btn-follow yt-img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/plantilla/icono_youtube.svg" alt="Youtube" title="Youtube">
                        </a>
                    </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="container">
        <?php
        $args = array(
            'post_type' => 'informacion',
            'posts_per_page' => '-1'
        );
        ?>
        <?php $the_query = new WP_Query($args); ?>
        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <ul class="copy-cont">
                <li class="copy-item">
                    <a href="http://www.manya.pe" target="blank" title="Manya.pe" alt="Manya.pe"><img src="<?php echo get_template_directory_uri() ?>/img/plantilla/icono_manya.svg" alt="Manya.pe" title="Manya.pe"></a>
                    <a href="http://www.manya.pe/blog.html" target="blank" title="Manya.pe" alt="Manya.pe">Manya.pe</a> | 
                    <a href="http://www.manya.pe/nuestros-trabajos.html" target="blank" title="Marketing Digital" alt="Marketing Digital">Marketing Digital</a>
                </li>
                <li class="copy-item copy-help">
                    <a href="<?php the_field( "f-temlink");  ?>" target="blank">
                        <?php the_field( "f-temnom");  ?>
                    </a>
                </li>
                <li class="copy-item copy-right">
                    <?php the_field( "f-copy");  ?>
                </li>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        </div>
    </footer>

	<!--[ Jquery ]-->
	<script src="<?php echo get_template_directory_uri() ?>/js/jquery.js"></script>
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