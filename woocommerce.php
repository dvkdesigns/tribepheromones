<?php
get_header(); ?>

<div id="primary" class="content-area container-fluid p-5">
    <main id="main" class="site-main" role="main">

        <?php
        woocommerce_content();
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
