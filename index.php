<? get_header(); ?>



<?php $query = new WP_Query( 'post_type=page' );
if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post();
?>

<?php $stripe = ($stripe == 'dark') ? 'bright' : 'dark'; ?>

<?
$slug = $post -> post_name;
$classes = array($slug, $stripe);
?>

<section <?php post_class($classes); ?> >
    <div class="inner">
        <h3><? the_title(); ?></h3>
        <div class="content">
            <div class="content-inner">
                <? the_content(); ?>
            </div>
            
        </div>
    </div>
</section>

<?php endwhile; endif; ?>

<? get_footer(); ?>
