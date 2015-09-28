<?php
/*
Template Name: Contact us
*/
?>

<?php get_header(); ?>

<section class="hero">
    <div class="row">
        <div class="medium-12 large-10 large-centered columns">
        <?php if(get_field( "masthead_title" )!= "") { ?>
            <h1><?php the_field('masthead_title'); ?></h1>
        <?php } ?>
        <?php if(get_field( "masthead_sub_title" ) != ""){ ?>
            <h2><?php the_field('masthead_sub_title');?></h2>
        <?php } ?>
        <?php if(get_field( "masthead_body") != ""){ ?>    
            <?php the_field('masthead_body'); ?>
        <?php } ?>
        </div>
    </div>
</section>

<?php include 'modular-content-block.php' ?>

<section class="contact-map">
    <div id="map"></div>
</section>
<section>
    <div class="row">
        <div class="medium-12 large-10 large-centered columns">
            <?php the_field('below_the_map'); ?>
        </div>
    </div>
    <img src="<?php bloginfo('template_url'); ?>/assets/img/triangles_bottom.png" class="triangle-bottom">
</section>
<?php get_footer(); ?>