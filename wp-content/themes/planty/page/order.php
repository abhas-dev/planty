<?php /* Template Name: Page de Commande */ ?>

<?php get_header(); ?>

<main class="order">
    <div class="container">
        <h1>Commander</h1>
        <?php
        the_field('order_order_form');
        ?>
<!--        <form action="" method="post">-->
<!---->
<!--            <section class="order-content">-->
<!--                <h2>Votre commande</h2>-->
<!--                <div class="flavours-grid">-->
<!--                    <div class="flavour-container">-->
<!--                        <div class="flavour-test">-->
<!--                            <img src="--><?php //= get_theme_file_uri('assets/img/fraise.png') ?><!--" alt="fraise">-->
<!--                            <span>Fraise</span>-->
<!--                        </div>-->
<!---->
<!--                        <div class="flavour-container__control">-->
<!--                            <div class="flavour-container__quantity">-->
<!--                                <div class="flavour-container__quantity-input">-->
<!--                                    <input type="number" name="fraise" value="0">-->
<!--                                </div>-->
<!---->
<!--                                <div class="flavour-container__quantity-adjustment">-->
<!--                                    <button class="increment btn-primary">+</button>-->
<!--                                    <button class="decrement btn-primary">-</button>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <button class="btn btn-primary flavour-quantity__cta">Ok</button>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="flavour-container">-->
<!--                        <div class="flavour-test">-->
<!--                            <img src="--><?php //= get_theme_file_uri('assets/img/pamplemousse.png') ?><!--" alt="pamplemousse">-->
<!--                            <span>Pample-->
<!--                                    mousse</span>-->
<!--                        </div>-->
<!---->
<!--                        <div class="flavour-container__control">-->
<!--                            <div class="flavour-container__quantity">-->
<!--                                <div class="flavour-container__quantity-input">-->
<!--                                    <input type="number" name="fraise" value="0">-->
<!--                                </div>-->
<!--                                <div class="flavour-container__quantity-adjustment">-->
<!--                                    <button class="increment btn-primary">+</button>-->
<!--                                    <button class="decrement btn-primary">-</button>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <button class="btn btn-primary flavour-quantity__cta">Ok</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="flavour-container">-->
<!--                        <div class="flavour-test">-->
<!--                            <img src="--><?php //= get_theme_file_uri('assets/img/framboise.png') ?><!--" alt="framboise">-->
<!--                            <span>Fram-->
<!--                                    boise</span>-->
<!--                        </div>-->
<!---->
<!--                        <div class="flavour-container__control">-->
<!--                            <div class="flavour-container__quantity">-->
<!--                                <div class="flavour-container__quantity-input">-->
<!--                                    <input type="number" name="fraise" value="0">-->
<!--                                </div>-->
<!--                                <div class="flavour-container__quantity-adjustment">-->
<!--                                    <button class="increment btn-primary">+</button>-->
<!--                                    <button class="decrement btn-primary">-</button>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <button class="btn btn-primary flavour-quantity__cta">Ok</button>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!---->
<!--                    <div class="flavour-container">-->
<!--                        <div class="flavour-test">-->
<!--                            <img src="--><?php //= get_theme_file_uri('assets/img/citron.png') ?><!--" alt="citron">-->
<!--                            <span>Citron</span>-->
<!--                        </div>-->
<!---->
<!--                        <div class="flavour-container__control">-->
<!--                            <div class="flavour-container__quantity">-->
<!--                                <div class="flavour-container__quantity-input">-->
<!--                                    <input type="number" name="fraise" value="0">-->
<!--                                </div>-->
<!--                                <div class="flavour-container__quantity-adjustment">-->
<!--                                    <button class="increment btn-primary">+</button>-->
<!--                                    <button class="decrement btn-primary">-</button>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <button class="btn btn-primary flavour-quantity__cta">Ok</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </section>-->
<!---->
<!--            <section class="order-details">-->
<!--                <div class="order-details__user-info">-->
<!--                    <h2>Vos informations</h2>-->
<!---->
<!--                    <div class="order-details__user">-->
<!--                        <div class="order-details__user-name form-groups">-->
<!--                            <label for="name">Nom</label>-->
<!--                            <input type="text" name="name" id="name">-->
<!--                        </div>-->
<!---->
<!--                        <div class="order-details__user-firstname form-groups">-->
<!--                            <label for="firstname">Prénom</label>-->
<!--                            <input type="text" name="firstname" id="firstname">-->
<!--                        </div>-->
<!---->
<!--                        <div class="order-details__user-email form-groups">-->
<!--                            <label for="email">Email</label>-->
<!--                            <input type="email" name="email" id="email">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="order-details__delivery">-->
<!--                    <h2>Livraison</h2>-->
<!---->
<!--                    <div class="order-details__delivery-address form-groups">-->
<!--                        <label for="address">Adresse</label>-->
<!--                        <input type="text" name="address" id="address">-->
<!--                    </div>-->
<!---->
<!--                    <div class="order-details__delivery-postal form-groups">-->
<!--                        <label for="postal">Code postal</label>-->
<!--                        <input type="text" name="postal" id="postal">-->
<!--                    </div>-->
<!---->
<!--                    <div class="order-details__delivery-city form-groups">-->
<!--                        <label for="city">Ville</label>-->
<!--                        <input type="text" name="city" id="city">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </section>-->
<!---->
<!--            <div class="order__cta">-->
<!--                <a href="#" class="btn btn-primary">Commander</a>-->
<!--            </div>-->
<!--        </form>-->
    </div>
</main>

<?php get_footer();