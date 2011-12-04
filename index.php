<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>
    <?php
    global $page, $paged;
    wp_title( '|', true, 'right' );
    bloginfo( 'name' );
    $site_description = get_bloginfo( 'description', 'display' );
    
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        echo " | $site_description";
    }
    
    if ( $paged >= 2 || $page >= 2 ) {
        echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
    }
    ?>
</title>
<meta name="description" content="">
<meta name="author" content="">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') ?>/css/base.css">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') ?>/css/skeleton.css">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') ?>/css/layout.css">

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory') ?>/images/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo get_bloginfo('template_directory') ?>/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_bloginfo('template_directory') ?>/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_bloginfo('template_directory') ?>/images/apple-touch-icon-114x114.png">

</head>
<body>

    
    
    <!-- Primary Page Layout
    ================================================== -->
<div class="container">
    <header class="sixteen columns clearfix" style="background-color: #ccc;">
    	<h1><?php bloginfo( 'name' ); ?></h1>
    	<h2 class="alt" id="site-description"><?php bloginfo( 'description' ); ?></h2>
    </header>
    
    <nav class="sixteen columns clearfix" id="access" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav>
    
    <div class="twelve columns clearfix">
        
            <?php
            /* Run the loop to output the posts.
            * If you want to overload this in a child theme then include a file
            * called loop-index.php and that will be used instead.
            */
            get_template_part( 'loop', 'index' );
            ?>
            <div class="row">
                <div class="six columns alpha">
                    <div  style="border: 1px solid #000;">
                        <h2>Nested one</h2>
                        This is a test!
                    </div>
                </div>
                <div class="six columns omega">
                    <div  style="border: 1px solid #000;">
                        <h2>Nested twoooo</h2>
                        And so is this.
                    </div>
                </div>
            </div>
        
        
    </div>
    <section class="four columns clearfix">
        <?php get_sidebar(); ?>
    </section>
    
    <section class="sixteen columns clearfix">
        <p>
            This is a section just above the footer.
        </P>
    </section>
    
    <footer class="sixteen columns">
        &copy; Copyright <?php date('Y') ?>. This is the footer.
    </footer>
</div>
<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory') ?>/js/tabs.js"></script>

<!-- End Document
================================================== -->
</body>
</html>
