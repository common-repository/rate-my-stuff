<?php
/*
License: MIT License
Plugin Name: Rate My Stuff - Custom Field Variant
Plugin URI: https://desbest.com/projects/rate-my-stuff
Description: Lets you use a dynamic, star-based rating system in your posts using a custom field. Use a custom field called "rating" with a value of 1-5 that supports half ratings (.5) for this to work. Originally made by Dave Cantrell. http://deadcantrant.com
Version: 1.3
Author: desbest
Author URI: http://desbest.com
*/

// require_once( plugins_url('rate-my-stuff/core.php' ));
require_once("core.php");

function rms_show_post_rating($post_id) {
  $rating = get_post_meta($post_id, "rating", true);
  if ($rating) {
    echo "<div class='rating'>";
    echo rate_my_stuff_calc($rating);
    echo "</div>";
  }
}

?>