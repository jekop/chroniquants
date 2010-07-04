
<div style="">
  <ul class="spy">
    
    <?php $my_query = new WP_Query('orderby=rand'); ?>
    <?php while ($my_query->have_posts()) : $my_query->the_post();?>
    <?php $image_path = get_post_meta($post->ID, 'image', $single = true); ?>
    <li>
      <div class="spy-thumb">
        <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>">
          <?php thumbnail_img($image_path, 75, 45) ?>
        </a>
      </div>
      <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
      <div class="auth"> Posted by <?php the_author(); ?> </div> 
    </li>
    <?php endwhile; ?>
  </ul>
</div>