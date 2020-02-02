<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #main div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arity Child
 */

?>

</main><!-- #main -->

<footer id="site-footer" class="site-footer">

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                </div>
            </div>
        </div>
    </div>

</footer>

<!-- This is a return to top button in the bottom right corner of the screen -->
<div class="js-to-top">
    <div class="arrow-up"></div>
</div>

<?php wp_footer(); ?>
<?php the_field( 'tracking_in_footer', 'options' ); ?>
</body>
</html>
