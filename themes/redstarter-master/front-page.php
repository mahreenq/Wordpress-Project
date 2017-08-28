

<?php
get_header(); ?>

<div id="primary" class="content-area border-edge">
   <main id="main" class="site-main" role="main">

<?php get_banner (); ?>

<?php get_template_part( 'template-parts/shopstuffhomepage' ); ?>
<?php get_template_part( 'template-parts/journalhomepage' ); ?>
<?php get_template_part( 'template-parts/adventurehomepage' ); ?>

    </main>
</div>

<?php get_footer(); ?>
