<?php
/*
Template Name: Team
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

<section class="team-listing">
    <div class="team-listing-rows-contaner">
    <?php if(have_rows('team_member_list')): ?>
        <?php while(have_rows('team_member_list')):the_row(); ?>
            <?php 
            $photo = get_sub_field('member_photo');
            $name =  get_sub_field('member_name');
            $title = get_sub_field('member_title');
            $email = get_sub_field('member_email');
            ?>
        <div class="team-listing-row">
            <div class="row">
                <div class="medium-10 large-10 large-centered columns">
                    <div class="team-listing-headshot">
                        <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" />
                    </div>
                    <div class="team-listing-meta">
                        <div class="meta-tbl">
                            <div class="meta-cell">
                                <div class="name"><?php echo $name; ?></div>
                                <div class="title"><?php echo $title; ?></div>
                                <div class="email"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
                                <?php if(have_rows('social_accounts')): ?>
                                    <?php while(have_rows('social_accounts')):the_row(); ?>
                                        <a href="<?php the_sub_field('social_media_link') ?>" class="team-social-icon" target="_blank"><img src="<?php the_sub_field('social_media_icon') ?>" width="50" height="50" alt=""></a>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>   
                </div>                                 
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
    <img src="<?php bloginfo('template_url'); ?>/assets/img/triangles_bottom.png" class="triangle-bottom">
</section>
<?php get_footer(); ?>