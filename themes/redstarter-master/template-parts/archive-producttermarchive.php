
<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>




<?php
echo '<br><br><div class="termtitle">';
echo '<h1 class="page-title">';
  single_term_title();
echo '</h1>';
  the_archive_description( '<div class="taxonomy-description">', '</div>' );
echo '</div>';

?>
