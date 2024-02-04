<?php
/**
 * Main template file.
 * 
 * @package yttheme
 */
get_header();
?>

<main class="content">
  <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
        // Your post content goes here
        the_title('<h2>', '</h2>');
        the_content();
      endwhile;
    else :
      // If no posts are found, display a message
      echo '<p>No content found</p>';
    endif;
  ?>
</main>

<?php 
get_footer();
?>
