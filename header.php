<!doctype html>
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

        <!-- Use the .htaccess and remove these lines to avoid edge case issues.
        More info: h5bp.com/b/378 -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title></title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Mobile viewport optimized: j.mp/bplateviewport -->
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

        <!-- CSS: implied media=all -->
        <!-- CSS concatenated and minified via ant build script-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
        <!-- end CSS-->

        <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

        <script type="text/javascript" src="//use.typekit.net/avz0fqw.js"></script>
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
                            <li><? the_title(); ?></li>
                            <? endwhile; endif; ?>
                        w</ul>
                    </nav>
                </div>
            </header>

            <div id="main" role="main">

