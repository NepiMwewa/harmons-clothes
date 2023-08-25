
<?php /* Template Name: dark-page */ ?>
<?php get_header('dark');?>
<div class="no-margin-page page-content">
  
  <?php if(have_posts()) :
    while (have_posts()) :the_post();
      the_content();
    endwhile;

    else:
      echo '<p>No content found</p>';

    endif;
  ?>
</div>

<?php get_footer();?>
