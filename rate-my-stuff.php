<?php
/*
License: MIT License
Plugin Name: Rate My Stuff
Plugin URI: https://desbest.com/projects/rate-my-stuff
Description: Lets you use a dynamic, star-based rating system in your posts using a simple, tag-like syntax. By entering [rate x] where x is the rating from 1.5. Also supports half ratings. Originally made by Dave Cantrell http://deadcantrant.com
Version: 1.3
Author: desbest
Author URI: http://desbest.com
*/
// echo plugins_url('rate-my-stuff/core.php'); exit();
require_once("core.php");

add_filter('the_content', 'rate_my_stuff');

function rate_my_stuff($content) {
  $pattern = '/\[rate (\d|\d\.\d)\]/';
  $matches;
  $count = preg_match_all($pattern, $content, $matches);
  
  /* invert the resulting match set from preg_match_all.
     the output must be in the form:
        [0]
          [0] => the full tag (e.g., [dcr_rate 5])
          [1] => the rating (e.g., 5)
        [1]
          ... same as above
  */
  $ratings;
  for($i = 0; $i <= $count - 1; $i++) {
    $ratings[$i][0] = $matches[0][$i];
    $ratings[$i][1] = $matches[1][$i];
  }

  /* replace each tag with it's equivalent HTML <img> tags */
  if(isset($ratings) && count($ratings) > 0) { /* prevents errors on posts with no ratings */
    foreach($ratings as $rating) {
      $search = $rating[0];
      /* have to escape the brackets to work in regular expressions */
      $search = preg_replace('/\[/', '\[', $search);
      $search = preg_replace('/\]/', '\]', $search);
      $search = '/'.$search.'/';
      $replace = rate_my_stuff_calc($rating[1]);
      $content = preg_replace($search, $replace, $content);
    }
  }
  return $content;
}

?>