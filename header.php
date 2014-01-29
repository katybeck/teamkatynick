<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Team KatyNick</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Mobile viewport optimized: j.mp/bplateviewport -->
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
        <script type="text/javascript" src="//use.typekit.net/avz0fqw.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRhm-aN8BKMfN161SwEs3Wu8E2spLsiNI&sensor=false">
        </script>
        <script type="text/javascript">
			try {
				Typekit.load();
			} catch(e) {
			}
        </script>
    </head>

    <body>

        <div id="container">

            <header>
                <div class="inner">
                    <h1>Team KatyNick</h1>
                    <nav>
                        <ul>
                            <?php $query = new WP_Query( 'post_type=page' ); ?>
                            <? if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post(); ?>
                            <li><a href="#<? echo $post -> post_name; ?>"><? the_title(); ?></a></li>
                            <? endwhile; endif; ?>
                        w</ul>
                    </nav>
                </div>
            </header>

            <div id="main" role="main">

