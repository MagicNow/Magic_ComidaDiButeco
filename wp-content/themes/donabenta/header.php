<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package donabenta
 */

?>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.min.css">
<link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
<?php wp_head(); ?>
<link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/css/comidadibuteco.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body <?php body_class(); ?>>

  <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="header-content clearfix">
                        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/donabenta__logo.png" class="main_logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

