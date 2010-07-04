<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stepcarousel.css" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/stepcarousel.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/spy.js"></script>


<style type="text/css" media="screen">
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="main">
  <div id="header">
    <div style="float: right"><?php get_search_form(); ?></div>
    <h1>
      <a href="<?php echo get_option('home'); ?>">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.jpg">
      </a>
    </h1>
  </div>
  <div id="nav">
    <ul><?php wp_list_categories('orderby=id&title_li=&depth=2'); ?></ul>
  </div>