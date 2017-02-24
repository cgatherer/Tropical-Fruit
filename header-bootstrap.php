<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
      
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="twitter:card" content="summary" />
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    
    <?php wp_head(); ?>
    
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/royalslider/skins/default/rs-default.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/Magnific-Popup-master/dist/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/wine-beer-spirit.css">
    
    <style type="text/css">
        /*navbar fix*/
        @media (min-width: 971px) and (max-width: 1100px) { 
            .navbar .brand { padding: 15px 0 0 0 !important;}
            .navbar .nav {font-size:12px !important;} 
            .navbar form.search-form{max-width: 100px;}
        }
        @media (min-width:767px){.navbar .nav {float: right;}}
        .brand img:hover{opacity: 0.8;}
    </style>
    <style>
        .key_bread a {color: #000; text-decoration: none; } /* BED73E */
        .key_bread span {color: #FFF; text-shadow: 1px 1px; }
        div.key_bread{
            position: inherit;
            max-height: 45px;
            line-height: normal;
            overflow: hidden;
            margin: 0 auto;
            background-color: #E2F876;
            height: 45px;
            padding-top: 17px;
            padding-left: 30px;
            /* z-index: 1000; */
            font-size: .9em;        
            font-weight: bold; 
        }
        
        @media (min-width:1000px){div.key_bread{height: 70px; padding-top: 20px; font-size: 18pt !important; min-height: 65px; max-height: 75px;}}
        @media (max-width:425px){div.key_bread{height: auto !important; padding-top: 5%; font-size: 1em !important; max-height: 75px;}}
        .key_bread a:hover{color:#999;} 
    </style>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/isotope.pkgd.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/packery-mode.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/royalslider/jquery.royalslider.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=prepCaptcha&render=explicit" async defer></script>  
    
</head>

<body <?php body_class( $class ); ?>>

<div class="navbar navbar-inverse navbar-relative-top" style="position:fixed;width:100%;z-index:90;">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                 <a class="brand" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                <img name="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="iTi Tropicals"></a>
                <?php
                $searchBar = '<div style="display:inline-block;padding-left:12px;padding-top:5px;">';
                $searchBar .= '<form role="search" method="get" class="search-form" action="http://www.ititropicals.com/"><label><span class="screen-reader-text">Search for:</span><input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" /></label><input type="submit" class="search-submit screen-reader-text" value="Search" /></form>';
                $searchBar .= '</div>';

                wp_nav_menu(
                    array(
                        'menu' => 'main-menu',
                        'container_class' => 'nav-collapse collapse',
                        'menu_class' => 'nav',
                        'fallback_cb' => '',
                        'menu_id' => 'main-menu',
                        'items_wrap' => '<ul id="%1$s" class="%2$s dropdown">%3$s<li>'.$searchBar.'</li></ul>',
                        'walker' => new Bootstrapwp_Walker_Nav_Menu()
                    )
                );
                ?>
            </div>
        </div>
    </div>
    <div class="navbar navbar-inverse navbar-relative-top" style="visibility:hidden;opacity:0;">
        <div class="navbar-inner">
                <img name="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="iTi Tropicals">
            </div>
        </div>
    </div>
    <script type="text/javascript">
        jQuery('li.menu-item').on('click', function(e){
            jQuery(this).find('.dropdown-menu').toggleClass('active');
            e.stopPropagation();
        });
        jQuery(document).on('click', function(e){
            if( !jQuery(e.target).is('.dropdown-menu.active') )
                jQuery('.dropdown-menu.active').removeClass('active');
        });
    </script>
