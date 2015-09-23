<?php
/*
Template Name: Team
*/
?>

<?php

get_header();

if( have_rows('modular_content') ):
 	while ( have_rows('modular_content') ) : the_row();

		if ( get_row_layout() == 'masthead_block' ){ ?>
			<section class="hero">
			    <div class="row">
			        <div class="medium-12 large-10 large-centered columns">
			        <?php if(get_sub_field( "masthead_title" )!= "") { ?>
			            <h1><?php the_sub_field('masthead_title'); ?></h1>
			        <?php } ?>
			        <?php if(get_sub_field( "masthead_sub_title" ) != ""){ ?>
			            <h2><?php the_sub_field('masthead_sub_title');?></h2>
			        <?php } ?>
			        <?php if(get_sub_field( "masthead_body") != ""){ ?>    
			            <?php the_sub_field('masthead_body'); ?>
			        <?php } ?>
			        </div>
			    </div>
			</section>
		<?php } ?>

	    <?php if (get_row_layout() == 'text_block' ){ ?>
	        <section>
	            <div class="row">
	                <div class="medium-12 large-10 large-centered columns">
	                    <?php the_sub_field('text_area'); ?>
	                </div>
	            </div>
	        </section>
	    <?php } ?>

  	<?php endwhile; ?>
<?php endif; ?>

<section class="team-listing">
    <div class="team-listing-rows-contaner">
        <div class="team-listing-row">
            <div class="row">
                <div class="medium-10 large-10 large-centered columns">
                    <div class="team-listing-headshot">
                        <img src="assets/img/peter_luong.jpg" alt="PETER LUONG">
                    </div>
                    <div class="team-listing-meta">
                        <div class="meta-tbl">
                            <div class="meta-cell">
                                <div class="name">PETER LUONG</div>
                                <div class="title">Co-Founder & Managing Director</div>
                                <div class="email"><a href="mailto:peter@caskadia.com">peter@caskadia.com</a></div>
                                <a href="https://ca.linkedin.com/in/luongpeter" class="team-socil-icon" target="_blank"><img src="assets/img/linkedin_icon.png" width="50" height="50" alt="PETER LUONG Linkedin"></a>
                            </div>
                        </div>
                    </div>   
                </div>                                 
            </div>
        </div>
        <div class="team-listing-row">
            <div class="row">
                <div class="medium-10 large-10 large-centered columns">
                    <div class="team-listing-headshot">
                        <img src="assets/img/ryan_pernia.jpg" alt="RYAN PERNIA">
                    </div>
                    <div class="team-listing-meta">
                        <div class="meta-tbl">
                            <div class="meta-cell">
                                <div class="name">RYAN PERNIA</div>
                                <div class="title">Co-Founder</div>
                                <div class="email"><a href="mailto:ryan@caskadia.com">ryan@caskadia.com</a></div>
                                <a href="https://ca.linkedin.com/in/ryanpernia" class="team-socil-icon" target="_blank"><img src="assets/img/linkedin_icon.png" width="50" height="50" alt="RYAN PERNIA Linkedin"></a>
                            </div>
                        </div>
                    </div>   
                </div>                                 
            </div>
        </div>
        <div class="team-listing-row">
            <div class="row">
                <div class="medium-10 large-10 large-centered columns">
                    <div class="team-listing-headshot">
                        <img src="assets/img/jacqueline_alexander.jpg" alt="JACQUELINE ALEXANDER">
                    </div>
                    <div class="team-listing-meta">
                        <div class="meta-tbl">
                            <div class="meta-cell">
                                <div class="name">JACQUELINE ALEXANDER</div>
                                <div class="title">Talent & Business Development Manager</div>
                                <div class="email"><a href="mailto:jacqueline@caskadia.com">jacqueline@caskadia.com</a></div>
                                <a href="https://www.linkedin.com/in/alexanderjacqueline" class="team-socil-icon" target="_blank"><img src="assets/img/linkedin_icon.png" width="50" height="50" alt="JACQUELINE ALEXANDER Linkedin"></a>
                            </div>
                        </div>
                    </div>   
                </div>                                 
            </div>
        </div>
    </div>
    <img src="assets/img/triangles_bottom.png" class="triangle-bottom">
</section>
<?php get_footer(); ?>