<?php
function eatSoup(){
	// Write your code here:
  global $has_soup, $is_hungry;

  if ($has_soup === FALSE) {
    print "You don't have any cooked food to eat!\n";
  } else {
    print "You have eaten the soup!\n";
    $has_soup = FALSE;
    $is_hungry = FALSE;
  };

}
