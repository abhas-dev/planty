<?php /* Template Name: Page d'Accueil */
get_header(); ?>

    <main>
        <section class="hero">
            <div class="content">
                <h1 class="hero__title"><?php the_field('homepage_page_title'); ?></h1>

                <?php
                $image = get_field('homepage_hero_image');
                $imageLarge = wp_get_attachment_image_src($image['id'], 'large');
//                $imageLarge = wp_get_attachment_image($image['id'], 'large', false, ['class' => 'hero__img']);
                $image_alt = get_post_meta($image['id'], '_wp_attachment_image_alt', TRUE);
                //                wp_get_attachment_image_src()
                ?>
                <img class="hero__img" src="<?= $imageLarge[0]; ?>" alt="<?= $image_alt; ?>">
<!--                <img class="hero__img" src="--><?php //= get_theme_file_uri('assets/img/hero.png') ?><!--" alt="canette planty">-->
            </div>

            <div class="wave">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <filter id="shadow" color-interpolation-filters="sRGB">
                        <feDropShadow dx="0" dy="0" stdDeviation="20" flood-color="#DC9F96" />
                    </filter>

                    <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="with-shadow"></path>
                    <!--                    <path class="st0" d="M1920,25.89v30.22c0,0-309.22,27.56-844.33,27.56S0,54.78,0,54.78V28.56L1920,25.89z"/>-->
                    <!--                    <path class="st1" d="M1920,0v30.22c0,0-309.22,27.56-844.33,27.56S0,28.89,0,28.89V2.67L1920,0z"/>-->
                </svg>
            </div>
        </section>

        <section class="product-description">
            <h2><?php the_field('homepage_product_description_title'); ?></h2>
            <p> <?php the_field('homepage_product_description_text'); ?> </p>
        </section>

        <section class="flavours">
            <h2><?php the_field('homepage_flavours_title'); ?></h2>
            <p><?php the_field('homepage_flavours_text'); ?></p>

            <div class="flavours__container">
                <div class="flavour">
	                <?php
	                $image = get_field('homepage_flavour_first_image');
	                $size = 'large'; // (thumbnail, medium, large, full or custom size)
	                if( $image ) {
		                echo wp_get_attachment_image( $image, $size );
	                }
	                ?>
                    <span><?php the_field('homepage_flavour_first_text'); ?></span>
                </div>

                <div class="flavour">
                    <?php
                    $image2 = get_field('homepage_flavour_second_image');
                    if( $image2 ) {
	                    echo wp_get_attachment_image( $image2, $size );
                    }
                    ?>
                    <span><?php the_field('homepage_flavour_second_text'); ?></span>
                </div>

                <div class="flavour">
	                <?php
	                $image3 = get_field('homepage_flavour_third_image');
	                if( $image3 ) {
		                echo wp_get_attachment_image( $image3, $size );
	                }
	                ?>
                    <span><?php the_field('homepage_flavour_third_text'); ?></span>
                </div>

                <div class="flavour">
	                <?php
	                $image4 = get_field('homepage_flavour_fourth_image');
	                if( $image4 ) {
		                echo wp_get_attachment_image( $image4, $size );
	                }
	                ?>
                    <span><?php the_field('homepage_flavour_fourth_text'); ?></span>
                </div>
            </div>

            <a href="<?= get_permalink(get_page_by_path('commande')); ?>" class="btn btn-primary flavours__btn"><?php the_field('homepage_flavours_cta'); ?></a>

            <div class="wave">
                <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z"></path>
                </svg>
            </div>
        </section>

        <section class="testimonial">
            <h2><?php the_field('homepage_testimonial_title'); ?></h2>
            <div class="cards">
                <div class="card">
                    <div class="card__img">
                        <?php
                        $imageTestimonial1 = get_field('homepage_testimonial_first_image');
                        if( $imageTestimonial1 ) {
                            echo wp_get_attachment_image( $imageTestimonial1, $size );
                        }
                        ?>
                    </div>

                    <div class="card__content">
                        <h3><?php the_field('homepage_testimonial_first_title'); ?></h3>
                        <p><?php the_field('homepage_testimonial_first_text'); ?></p>
                    </div>
                </div>

                <div class="card">
                    <div class="card__img">
	                    <?php
	                    $imageTestimonial2 = get_field('homepage_testimonial_second_image');
	                    if( $imageTestimonial2 ) {
		                    echo wp_get_attachment_image( $imageTestimonial2, $size );
	                    }
	                    ?>
                    </div>

                    <div class="card__content">
                        <h3><?php the_field('homepage_testimonial_second_title'); ?></h3>
                        <p><?php the_field('homepage_testimonial_second_text'); ?></p>
                    </div>
                </div>

                <div class="card">
                    <div class="card__img">
                        <?php
                        $imageTestimonial3 = get_field('homepage_testimonial_third_image');
                        if( $imageTestimonial3 ) {
	                        echo wp_get_attachment_image( $imageTestimonial3, $size );
                        }
                        ?>
                    </div>

                    <div class="card__content">
                        <h3><?php the_field('homepage_testimonial_third_title'); ?></h3>
                        <p><?php the_field('homepage_testimonial_third_text'); ?></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer();