<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js ie6" lang="es">   <![endif]-->
<!--[if IE 7]>     <html class="no-js ie7" lang="es">   <![endif]-->
<!--[if IE 8]>     <html class="no-js ie8" lang="es">   <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" lang="es">   <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="es" class="" <?php language_attributes(); ?>> <!--<![endif]-->
<html lang="es">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '' ); ?><?php if (wp_title( '', false )) { echo ' |'; } ?> <?php bloginfo( 'name' ); ?></title>

    <!-- RESPONSIVE! ADAPTACIÓN DEL VIEWPORT & más -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- [ Meta ] -->
    <meta name="author" content="">

    <!--  -->
    <meta name="keywords" content="">
    <meta name="robots" content="all, index, follow">
    <meta name="googlebot" content="all, index, follow">
    <meta name="google" content="notranslate" />
    <meta name="format-detection" content="telephone=no">
    <meta name="google-site-verification" content="" />
    <!-- <meta name="p:domain_verify" content="a33875c4fb5a4c09a5ced84c8891e30e"/> -->
    <meta name=apple-mobile-web-app-capable content=yes>
    <!--[if lt IE 9]>
        <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="<?php bloginfo( 'template_url' ); ?>/produccion/js/lib/utilitario/respond.min.js"></script>
        <script src="<?php bloginfo( 'template_url' ); ?>/produccion/js/lib/utilitario/html5shiv.min.js"></script>
    <![endif]-->

    <!--[if (gte IE 6)&(lte IE 8)]>

    <![endif]-->

    <!-- [ Css ] -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/remodal.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.min.css?v=6.9">
    <?php $args = array(
        'post_type' => 'informacion',
        'posts_per_page' => '-1'
    );
    ?>
    <?php $the_query = new WP_Query($args); ?>
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <?php the_field( "h-ga");  ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    <?php wp_head(); ?>
    
</head>
<body id-page="<?php the_ID(); ?>" id="skrollr-body" class="skrollr-body">

    

    <header>
        <div class="menu-cont z-depth-1" 
            <?php if (is_front_page() or is_page_template( 'templates/inscripcion.php')) { ?>
            data-0="background-color: rgba(13,34,93,0);box-shadow:0 2px 5px 0 rgba(0,0,0,0.0);"
            data-500="background-color: rgba(13,34,93,1);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16);">
            <?php }else{ ?>
            data-0="background-color: rgba(13,34,93,1);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16);"
            data-500="background-color: rgba(13,34,93,1);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16);">
            <?php } ?>
        <?php
        $args = array(
            'post_type' => 'informacion',
            'posts_per_page' => '-1'
        );
        ?>
        <?php $the_query = new WP_Query($args); ?>
        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="container">
                <figure class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">
                        <?php $hLogo=get_field("h-logo"); ?>
                        <img src="<?php echo $hLogo['url'];?>" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>">
                    </a>
                </figure>
                <div class="right-menu">
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
                    <!-- <div class="lang">
                        ES
                        <ul class="lang-list" 
                        data-0="background-color: rgba(13,34,93,0);box-shadow:0 2px 5px 0 rgba(0,0,0,0.0);"
                        data-180="background-color: rgba(13,34,93,1);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16);">
                            <li><a href="#" title="Español" alt="Español">ES</a></li>
                            <li><a href="#" title="Ingles" alt="Ingles">EN</a></li>
                        </ul>
                    </div> -->
                    <?php do_action('wpml_add_language_selector'); ?>
        <?php
        $args = array(
            'post_type' => 'informacion',
            'posts_per_page' => '-1'
        );
        ?>
        <?php $the_query = new WP_Query($args); ?>
        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <a href="<?php the_field( "h-btnlink");  ?>" class="btn-header waves-effect waves" title="<?php the_field( "h-btn");  ?>">
                        <?php the_field( "h-btn");  ?>
                    </a>
                    <div id="menu" class="menu">
                        <?php the_field( "h-txtimenu");  ?>
                        <span class="menu-ico"></span>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
                    <?php

                    $menu_name = 'menu';
                    $locations = get_nav_menu_locations();
                    $menu = wp_get_nav_menu_object($locations[$menu_name]);
                    $menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));
                    ?>
                    <div id="menu-list" class="menu-list">
                        <ul>
                            <?php
                            $count = 0;
                            $submenu = false;
                            foreach ($menuitems as $item):
                                $link = $item->url;
                                $title = $item->title;
                                $cssClass = $item->classes[0];
                                // item does not have a parent so menu_item_parent equals 0 (false)
                                if (!$item->menu_item_parent):
                                    // save this id for later comparison with sub-menu items
                                    $parent_id = $item->ID;
                                    ?>
                                    <li> 
                                        <a href="<?php echo $link; ?>" title="<?php echo $title; ?>">                                      
                                            <?php echo $title; ?>
                                        </a>                                           
                                            <?php endif; ?>
                                            <?php if ($parent_id == $item->menu_item_parent): ?>
                                                <?php if (!$submenu): $submenu = true; ?>
                                                <ul class="menu-listsub">
                                                <?php endif; ?>
                                                    <li>
                                                        <a href="<?php echo $link; ?>" title="<?php echo $title; ?>">
                                                            <?php echo $title; ?>
                                                        </a>
                                                    </li>
                                                <?php if ($menuitems[$count + 1]->menu_item_parent != $parent_id && $submenu): ?>
                                                </ul>
                                            <?php
                                            $submenu = false;
                                            endif;?>
                                            <?php endif; ?>
                                            <?php if ($menuitems[$count + 1]->menu_item_parent != $parent_id): ?>
                                    </li>
                                    <?php
                                    $submenu = false;
                                    endif;?>
                                <?php $count++; ?>
                            <?php endforeach; ?>
                            <div class="menu-follow">
                            <?php
                            $args = array(
                                'post_type' => 'informacion',
                                'posts_per_page' => '-1'
                            );
                            ?>
                            <?php $the_query = new WP_Query($args); ?>
                            <?php if ($the_query->have_posts()) : ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <h2>
                                    <?php the_field( "h-txtmenu");  ?>
                                </h2>
                                <div class="menu-followcont">
                                    <a href="<?php the_field( "h-fb");  ?>" target="blank" title="Facebook" alt="Facebook" class="btn-menufollow menu-fb-img">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/plantilla/icono_facebook.svg" alt="Facebook" title="Facebook">
                                    </a>
                                    <a href="<?php the_field( "h-tw");  ?>" target="blank" title="Twitter" alt="Twitter" class="btn-menufollow menu-tw-img">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/plantilla/icono_twitter.svg" alt="Twitter" title="Twitter">
                                    </a>
                                    <a href="<?php the_field( "h-yt");  ?>" target="blank" title="Youtube" alt="Youtube" class="btn-menufollow menu-yt-img">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/plantilla/icono_youtube.svg" alt="Youtube" title="Youtube">
                                    </a>
                                </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-37480214-2', 'auto');
      ga('send', 'pageview');

    </script>

<?php if (is_front_page() or is_page_template( 'templates/inscripcion.php') or is_page_template( 'templates/gracias.php') or is_404()) { ?>

<?php }else{ ?>
    <section class="container breadcont margTop75" style="display:inline-block;vertical-align:top;">
        <div class="row">
            <?php the_breadcrumb(); ?>
        </div>
    </section>
    <div>
        <br>
        <br>
        <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
    </div>
<?php } ?>
    