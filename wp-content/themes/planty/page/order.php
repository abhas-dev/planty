<?php /* Template Name: Page de Commande */ ?>

<?php get_header(); ?>

<main class="order">
    <div class="container">
        <h1>Commander</h1>
        <?= do_shortcode(get_field('order_order_form')) ?>
    </div>
</main>

<?php get_footer();