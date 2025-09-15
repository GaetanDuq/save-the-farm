<?php
  // Change player location
function changeLocation(){
  // Write your code here:
  global $location;

  echo "Where do you want to go?\n";
  $response = readline(">> ");
  $response = strtolower($response);

  if ($location === "kitchen" && $response === "bathroom") {
    print "You go to: bathroom.\n";
    $location = "bathroom";
  }

  elseif ($location === "kitchen" && $response === "woods") {
    $location = "woods";
    print "You follow the winding path, shivering as you make your way deep into the Terror Woods.";
  }

  elseif ($location === "bathroom" && $response === "kitchen") {
    $location = "kitchen";
    print "You go to: kitchen.\n";
  }

  elseif ($location === "woods" && $response === "kitchen") {
    $location = "kitchen";
    print "You go to: kitchen.\n";
  }

  elseif ($response === "woods" || $response === "kitchen" || $response === "bathroom")  {
    print "You can't go directly to there from your current location. Try going somewhere else first.\n";
  }

  else {
    print "That doesn't make sense. Are you confused? Try 'look around'.\n";
  };

}
