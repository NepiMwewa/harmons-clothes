<?php
  if( has_post_parent()){ ?>      
    <div class="bread-crumbs">
    <?php $ancestors = get_post_ancestors(get_the_ID());
      for ($x = count($ancestors) - 1; $x >= 0 ; $x--) {
        ?>  
          <a href="<?php echo get_permalink($ancestors[$x]);?>"><?php echo get_the_title($ancestors[$x]);?></a>
          <p>/</p>
        <?php
      } 
    ?>
    <a> <?php echo get_the_title(); ?></a>
    </div>
  <?php
  }
?>
