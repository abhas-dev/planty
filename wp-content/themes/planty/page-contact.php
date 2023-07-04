<?php get_header(); ?>

<main>
    <section class="presentation">
        <div class="presentation__content">
            <h1><?php the_field('contact_presentation_title'); ?></h1>
            <p><?php the_field('contact_presentation_text');?></p>
        </div>
        <div class="wave">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="with-shadow"></path>
            </svg>
        </div>
    </section>

    <section class="about-us">
        <h2><?php the_field('contact_team_title');?></h2>
        <div class="team-part-container">
            <div class="team-part__content">
	            <?php
	            $teammate1 = get_field('contact_team_first_image');
	            $size = 'large'; // (thumbnail, medium, large, full or custom size)
	            if( $teammate1 ) {
		            echo wp_get_attachment_image( $teammate1, $size );
	            }
	            ?>
                <h3><?php the_field('contact_team_first_title');?></h3>
                <p><?php the_field('contact_team_first_text');?></p>
            </div>
            <div class="team-part__content">
	            <?php
	            $teammate2 = get_field('contact_team_second_image');
	            if( $teammate2 ) {
		            echo wp_get_attachment_image( $teammate2, $size );
	            }
	            ?>
                <h3><?php the_field('contact_team_second_title');?></h3>
                <p><?php the_field('contact_team_second_text');?></p>
            </div>
            <div class="team-part__content">
	            <?php
	            $teammate3 = get_field('contact_team_third_image');
	            if( $teammate3 ) {
		            echo wp_get_attachment_image( $teammate3, $size );
	            }
	            ?>
                <h3><?php the_field('contact_team_thrid_title');?></h3>
                <p><?php the_field('contact_team_thrid_text');?></p>
            </div>
        </div>
    </section>

    <section class="contact">
        <h2><?php the_field('contact_contact_title'); ?></h2>

        <?php the_field('contact_contact_form'); ?>
    </section>
</main>

<?php get_footer();