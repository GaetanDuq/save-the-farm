<?php

function pickMushrooms(){
	// Write your code here:
  global $location, $has_musrooms;

  if ($location !== "woods") {
    print "There aren't any mushrooms to pick!\n";
  } else {
    print "You've picked some mushrooms.\n";
    $has_mushrooms = TRUE;
  };

}  
