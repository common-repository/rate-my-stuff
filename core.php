<?php
/*
Author: Dave Cantrell http://deadcantrant.com, desbest http://desbest.com
License: MIT License
*/

/* Rate My Stuff core file */

/* calculates the string of HTML images required to represent the rating passed */
function rate_my_stuff_calc($stars) {
  /* config variables */
  $rate_path = plugins_url( 'rate-my-stuff/' ); //trailing slash
  // echo $rate_path; exit();
  $max_stars = 5;
  $alt_solid = '*';
  $alt_half  = '&frac12;';
  $alt_empty = '';
  /* end config variables */

  $nums = explode(".", $stars);
  
  $output = "";
  for ($i = 1; $i<=$nums[0]; $i++) {
    $output .= "<img src='" . $rate_path . "rating_star_solid.png' alt='$alt_solid'/>";
  }
  if ($nums[1] == 5 /* this magic number is the "half" rating, i.e. ".5" */) {
    $output .= "<img src='" . $rate_path . "rating_star_half.png' alt='$alt_half'/>";
  }
  if (($nums[0] < $max_stars) and ($nums[0] != ($max_stars - 1))) { //less than four stars, show remaining blanks
    /* if half-rating is used, must skip the first blank or we wind up with $max_stars+1 stars */
    $skip_one_blank = false;
    for ($i = 1; $i <= ($max_stars - $nums[0]); $i++) {
      if (!$skip_one_blank and $nums[1] == 5) { 
        $skip_one_blank = true; 
        continue;
      }
      $output .= "<img src='" . $rate_path . "rating_star_empty.png' alt='$alt_empty'/>";
    }
  }
  if (($nums[0] == ($max_stars - 1)) and ($nums[1] != $max_stars)) { //four stars only, show blank fifth
    $output .= "<img src='" . $rate_path . "rating_star_empty.png' alt='$alt_empty'/>";
  }
  
  return $output;
}

// echo "12345";

?>
