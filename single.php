<?php 
/** 
 * @package WordPress 
 * @subpackage Default_Theme 
 */ 
global $more;
get_header(); ?>

<div id="sidebar">
  <?php include(TEMPLATEPATH . "/sidebar.php"); ?>
</div>

<div id="content">
  
  <div class="single-main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
      <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <?php $image_path = get_post_meta($post->ID, 'image', $single = true); ?>
  			<h2><?php the_title(); ?></h2>
  			<small><?php the_time('j F Y') ?> <!-- par <?php the_author() ?> --></small>
  			<div class="entry">
  			  <?php if (the_tags) ?>
  			  <span style="float:left; margin-right: 10px; margin-bottom: 10px"><?php if ($image_path) thumbnail_img($image_path, 250); ?></span>
  				<?php the_content('Lire le reste de cet article &raquo;'); ?>
  			</div>
  			<p class="postmetadata"><?php the_tags('Mots-clefs&nbsp;: ', ', ', '<br />'); ?> Publié dans <?php the_category(', ') ?> | <?php edit_post_link('Modifier', '', ' | '); ?>  <?php comments_popup_link('Aucun commentaire »', '1 commentaire »', '% commentaires »', 'comments-link', 'Les commentaires sont fermés'); ?></p>
  		</div>
    
    <?php endwhile; else: ?>
      <p>Désolé, aucun article ne correspond à vos critères.</p>
    <?php endif; ?>
	
  	</div>
  	
  	<div class="single-side">
  	 <?php include(TEMPLATEPATH . "/spy.php"); ?>
  	</div>
  	<div style="clear:both">&nbsp;</div>
	
</div>

<?php get_footer() ?>