<?php get_header(); ?>

<main>
    <section class="presentation">
        <div class="presentation__content">
            <h1><?php the_field('contact_presentation_title'); ?></h1>
            <p><?php the_field('contact_presentation_text');?></p>
        </div>
    </section>

    <div class="wave">
        <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1440 75" style="enable-background:new 0 0 1440 75;" xml:space="preserve">
                <g>
                    <path class="st0" d="M722.5,58.36C1440,58.36,1440,0,1440,0H0C0,0,5,58.36,722.5,58.36z"/>
                    <path class="st1" d="M722.5,58.36C5,58.36,0,0,0,0v10c0,0,5,56.99,722.5,56.99S1440,10,1440,10V0C1440,0,1440,58.36,722.5,58.36z"
                    />
                </g>
            </svg>
    </div>

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