<?php 
  $slidecat = "la-une";
  $slidecount = 5;
  $query = new WP_Query('category_name= '. $slidecat .'&showposts='.$slidecount.''); 
?>


<div id="carousel_container">
  <div id="carousel" class="stepcarousel">
    <div class="belt">
      <?php while ($query->have_posts()) : $query->the_post(); $do_not_duplicate = $post->ID; ?>
      <?php $image_path = get_post_meta($post->ID, 'image', $single = true); ?>
      <?php if ($image_path) : ?>
      <div class="panel">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
          <?php thumbnail_img($image_path, 258, 150) ?>
        </a>
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
      
      </div>
      <?php endif; ?>
      <?php endwhile; ?>
    </div>
  </div>
</div>

<script>
    stepcarousel.setup({
    	galleryid: 'carousel', // id of carousel DIV
    	beltclass: 'belt', // class of inner "belt" DIV containing all the panel DIVs
    	panelclass: 'panel', // class of panel DIVs each holding content
    	autostep: { enable: true, moveby: 1, pause: 3000 },
    	panelbehavior: { speed: 500, wraparound: true, persist: true },
    	defaultbuttons: {
    	  enable: true, 
    	  moveby: 2, 
    	  leftnav: ['<?php bloginfo('template_url'); ?>/images/scar2.jpg', -10, 68], 
    	  rightnav: ['<?php bloginfo('template_url'); ?>/images/scar1.jpg', 0, 68]
    	},
    	statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
    	contenttype: ['external'] //content setting ['inline'] or ['ajax', 'path_to_external_file']
    });
</script>
