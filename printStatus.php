<?php
// Print Current Status
function printStatus(){
    global $location, $wearing_glasses, $wearing_contacts, $has_mushrooms, $has_soup, $is_hungry, $needs_to_pee;

    echo "You are in: $location\n";

  // Write your code here:
echo $wearing_contacts ? "You are wearing contacts.\n" : "";
echo $wearing_glasses ? "You are wearing glasses.\n" : "";
echo $has_mushrooms ? "You are holding mushrooms.\n" : "";
echo $has_soup ? "You are holding a scalding-hot bowl of mushroom soup.\n" : "";
echo $needs_to_pee ? "You need to pee!\n" : "";
echo $is_hungry ? "You are hungry.\n" : "You are well-fed and energetic.\n";


}
