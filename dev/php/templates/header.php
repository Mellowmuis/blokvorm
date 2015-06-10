<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,800,400' rel='stylesheet' type='text/css'>
    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >
<div class="scheme1-invert full-head">
    <div class="u-gridContainer">
        <div class="u-Col2 Logo">
            <a href="/home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.jpg"></a>
        </div>
        <div class="u-Col10">
           <div class="u-gridContainer">
                <div class="u-Row top-contact">
                    <p class="u-objRight"> 
                       <a href="tel:0619011511"> <i class="fa fa-phone"></i>  06 190 11 511</a>
                       <a href="mailto:info@blokvorm.nl"><i class="fa fa-envelope"></i>  info@blokvorm.nl</a>
                    </p>                   
                </div>
                <div class="u-Row">
                    <div class="Bot-Nav">
                    <div class="u-gridContainer" style="padding-right:0px;">
                        
                        
                        <div class="Nav-toggle u-cf">
                            <a class="Navigation-menuToggle" id="js-navCollapse">
                                <!--<svg class="Icon Icon--inline" viewBox="0 0 128 128">
                                    <use xlink:href="#icon-menu2"></use>
                                </svg>-->
                                <i class="fa fa-bars fa-2x"></i>
                            </a>
                        </div>
                        <div class="u-objRight">
                          <?php include 'includes/navigation.php'; ?>
                        </div>
                        <div class="Mob-contact-ico">
                            <a class="Button Button--transparent u-textInverted u-noLine telsvg" href="tel:0">
                                <!--<svg class="Icon Icon--inline" viewBox="0 0 128 128">
                                    <use xlink:href="#icon-phone"></use>
                                </svg>-->
                                <i class="fa fa-phone fa-2x"></i>
                            </a>
                        
                                <a class="Button Button--transparent u-textInverted u-noLine mailsvg" href="mailto:melle@lokaalgevonden.nl">
                                <!--<svg class="Icon Icon--inline" viewBox="0 0 128 128">
                                    <use xlink:href="#icon-envelope"></use>
                                </svg>-->
                                <i class="fa fa-envelope fa-2x"></i>
                            </a>
                        </div><!-- header-contact -->
                    </div>
                  </div>
                </div>
           </div>
        </div>
    </div>
</div>    
  
