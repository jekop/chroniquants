<?php

function thumbnail_img($path, $w, $h=0, $class="") {
  $script_src = get_bloginfo('stylesheet_directory') . "/timthumb.php";
  
  $opts = "src=" . $path . "&amp;zc=1";
  
    if ($w) { $opts .= "&amp;w=" . $w; }
  if ($h) { $opts .= "&amp;h=" . $h; }


  echo "<img src=\"" . $script_src . "?" . $opts . "\" class='" . $class . "' />"; 
}

?>