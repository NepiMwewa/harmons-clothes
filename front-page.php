<?php
  get_header();
?>

  <div id="front-page-content" class="page-content">
  
    <?php if(have_posts()) :
      while (have_posts()) :the_post();
        the_content();
      endwhile;

      else:
        echo '<p>No content found</p>';

      endif;
    ?>
    </div>

<?php
  get_footer();
?>
