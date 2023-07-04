<!doctype html>
<html lang="fr">
<head>
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <?php
    $logoId = get_theme_mod('custom_logo');
    ?>
    <a href="<?= home_url(); ?>"><img src="<?= wp_get_attachment_image_src($logoId, 'medium')[0]; ?>" alt="logo Planty" class="header__logo"></a>
    <?php
    wp_nav_menu([
        'menu' => 'main',
        'container' => 'nav',
        'theme_location' => 'main',
        'items_wrap' => '<ul class="header__nav">%3$s</ul>',
        'link_class' => 'header__link', // Ajout de la classe 'header__link' pour les <a>
    ]);
    ?>
    <!--// Récupère l'URL de la page de commande en utilisant l'ID de la page de commande
    $orderPageUrl = get_permalink(get_page_by_path('commande'));-->
<!--    <nav>-->
<!--        <ul class="header__nav">-->
<!--            <li><a href="contact.php">Nous rencontrer</a></li>-->
<!--            <li><a href="#">Admin</a></li>-->
<!--        </ul>-->
<!---->
<!--        <a href="order.php" class="header__cta btn-primary">Commander</a>-->
<!--    </nav>-->
<!--    'items_wrap' => '<ul class="header__nav">%3$s</ul><a href="'.$orderPageUrl.'" class="header__cta btn-primary">Commander</a>',-->
</header>