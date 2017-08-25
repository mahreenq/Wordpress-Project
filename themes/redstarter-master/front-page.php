

<?php
get_header(); ?>

<div id="primary" class="content-area border-edge">
   <main id="main" class="site-main" role="main">

<?php get_banner (); ?>

<?php get_template_part( 'template-parts/content-shopstuffhomepage' ); ?>
<?php get_template_part( 'template-parts/content-journalhomepage' ); ?>
<?php get_template_part( 'template-parts/content-adventurehomepage' ); ?>

    </main>
</div>

<?php get_footer(); ?>
