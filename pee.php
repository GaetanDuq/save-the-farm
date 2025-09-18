<?php

function pee(){
  global $location, $needs_to_pee;

  if ($location === "bathroom" || $location === "woods") {
    print "You relieve yourself.\n";
    $needs_to_pee = FALSE;
  } else {
    print "Are you crazy? You can't pee here!\n";
  };

}
