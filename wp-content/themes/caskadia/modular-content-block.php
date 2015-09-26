<?php
if( have_rows('modular_content') ):
    while ( have_rows('modular_content') ) : the_row();

        if (get_row_layout() == 'text_block' ){ ?>
            <section>
                <div class="row">
                    <div class="medium-12 large-10 large-centered columns">
                        <?php the_sub_field('text_area'); ?>
                    </div>
                </div>
            </section>
        <?php } ?>

        <?php 
        if (get_row_layout() == 'edge_to_edge_image_block') { ?>
            <section class="seperator" style="background-image:url(<?php echo the_sub_field('background_img'); ?>)">
                <div class="row">
                    <div class="medium-12 large-12 columns">
                        <ul>
                        <?php
                            if( have_rows('seperator_block') ):
                            // loop through the rows of data
                            while ( have_rows('seperator_block') ) : the_row();
                                echo "<li>";
                                echo the_sub_field('text_column');
                                echo "</li>";
                            endwhile;
                            endif;
                        ?>
                        </ul>
                    </div>
                </div>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/triangles_bottom.png" class="triangle-bottom">
            </section>
        <?php } // end layout ?> 
    <?php endwhile; ?>
<?php endif; ?>