<?php global $more; get_header(); ?>

<div id="sidebar">
  <?php include(TEMPLATEPATH . "/sidebar.php"); ?>
</div>

<div id="content">
  <?php include(TEMPLATEPATH . '/stepcarousel.php'); ?>
  
    <div class="posts-la-une-articles">
    <?php $query = new WP_Query('category_name=la-une&showposts=10'); ?>
    <?php if (have_posts()) : ?>
    <?php $extra_post_class = ""; $counter = 1; while ($query->have_posts()) : $query->the_post(); ?>
      <?php if ($counter >= 5) $extra_post_class = "post-line"; ?>
      <div <?php post_class($extra_post_class) ?> id="post-<?php the_ID(); ?>" <?php if ($counter == 4) echo "style='margin-right: 0px'" ?>>
          <?php 
            $more = 0;
            if ($counter == 1) {
              $w = 470;
              $h = 250;
            } else if ($counter < 5) {
              $w = 150;
              $h = 80;
            } else {
              $w = 80;
              $h= 45;
            }
            $image_path = get_post_meta($post->ID, 'image', $single = true);
            if ($image_path) : ?>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
              <?php thumbnail_img($image_path, $w, $h, "post_image") ?>
            </a>
            <?php endif; ?>
          <h2>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
          <h3>
          <?php the_time('j M Y') ?>, par <?php the_author() ?>
          </h3>
          <?php if ($counter < 5) the_content("La suite ..."); ?>
      </div>
    <?php $counter++; endwhile; ?>
    <?php endif; ?>
      <div style="text-align: right; clear: both;">
        <a href="/category/de-la-main">
          Et encore plus d'archives...
        </a>
      </div>
    </div>
    <div class="posts-la-une-images">
      <?php foreach (array("de-loeil", "du-crayon") as $cat) :  ?>
      <h1>LA UNE <?php echo $cat ?></h1>  
      <div class="posts-la-une-images-category">
        <?php $counter = 0; $query = new WP_Query('category_name=' . $cat . '&showposts=3'); ?>
        <?php if (have_posts()) : ?>
          <?php while ($query->have_posts()) : $query->the_post(); ?>
          <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
          <?php $image_path = get_post_meta($post->ID, 'image', $single = true); ?>
            <?php if ($image_path) : ?>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
              <?php if ($counter == 0) {
                $w = 320;
                $h = 250;
              } else {
                $w = 155;
                $h = 80;
              } ?>
              <?php thumbnail_img($image_path, $w, $h, "post_image") ?>
              <h2><?php the_title(); ?></h2>
            </a>
            <h3><?php the_time('j M Y') ?>, par <?php the_author() ?></h3>
            <?php endif; ?>
          </div>
          <?php  $counter++; endwhile; ?>
        <?php endif; ?>
      </div>
      <div style="clear: both">&nbsp;</div>
      <?php endforeach; ?>
    </div>
    <div style="clear: both">&nbsp;</div>
</div>

<?php get_footer() ?>