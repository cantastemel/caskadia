<?php
/*
Template Name: Jobs
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

<section class="job-listing" id="openings">
    <div class="row">
        <div class="medium-12 columns">
        <?php if( have_rows('job_listing') ): ?>
        	<?php while ( have_rows('job_listing') ) : the_row(); ?>
            <div class="job-listing-type"> 
                <h2 class="text-red"><?php echo the_sub_field('job_listing_type_header'); ?></h2>
                <?php if( have_rows('listing') ): ?>
                	<?php while ( have_rows('listing') ) : the_row(); ?>
                		<?php 
                			$title = get_sub_field('listing_title');
                			$location = get_sub_field('listing_location');
                			$job_details_selection = get_sub_field('job_details');
                			if ($job_details_selection == 'file') {
                				$detailsLink = get_sub_field('file_upload');
                			}elseif ($job_details_selection == 'url') {
                				$detailsLink = get_sub_field('url');
                			}else{
                				$detailsLink = '/';
                			}

                		?>
		                <div class="row job-listing-row"> <!-- loop this -->
		                    <div class="job-listing-single small-10 small-centered columns">
		                        <div class="row">
		                            <div class="job-listing-meta medium-12 large-8 columns">
		                                <h3><?php echo $title; ?></h3>
		                                <p><?php echo $location; ?></p>
		                            </div>
		                            <div class="job-listing-link medium-12 large-4 columns">
		                                <a href="<?php echo $detailsLink; ?>" target="_blank" class="btn btn-red">View Details</a>
		                            </div>                                    
		                        </div>
		                    </div>
		                </div> <!-- /job-listing-row" -->
                	<?php endwhile; ?>
                <?php endif; ?>
            <?php endwhile; ?>
            </div> <!-- job listing type -->
        <?php endif; ?>
        </div>
    </div>
    <img src="<?php bloginfo('template_url'); ?>/assets/img/triangles_bottom.png" class="triangle-bottom">
</section>

<?php get_footer(); ?>