<?php
/*
Template Name: Homepage
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

<section class="services" id="services">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/triangles_top.png" class="triangle-top">
    <div class="row">
        <div class="medium-10 medium-centered large-8 columns">
            <h1 class="services_section_title"><?php echo the_field('services_section_title'); ?></h1>
            <div class="services_section_copy">
                <?php echo the_field('services_section_copy'); ?>
            </div>
        </div>
    </div>
    <div class="services-gray-banner">
        <div class="row">
            <div class="medium-10 medium-centered large-8 columns">
                <h2><?php echo the_field('services_banner_title'); ?></h2>
                <div>
                    <?php echo the_field('services_banner_copy'); ?>
                </div>
            </div>
        </div>
    </div>
<?php if( have_rows('services') ): ?>
    <?php while( have_rows('services') ): the_row(); 
        $title = get_sub_field('service_title');
        $text = get_sub_field('service_text');
        $image = get_sub_field('service_image');
    ?>
        <div class="service-row">
            <div class="row">
                <div class="large-6 columns column-text">
                    <h2><?php echo $title; ?></h2>
                    <p><?php echo $text; ?></p>
                </div>
                <div class="large-6 columns column-image">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
</section>
<section class="footer-callout">
    <div class="row">
        <div class="medium-12 large-10 large-centered columns">
           <?php echo the_field('footer_callout_block'); ?>
        </div>
    </div>
    <img src="<?php bloginfo('template_url'); ?>/assets/img/triangles_bottom.png" class="triangle-bottom">
</section>
<?php get_footer(); ?>