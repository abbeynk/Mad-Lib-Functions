<?php
function generateStory($singular_noun, $verb, $color, $distance_unit){
  $replace_from = array("wood", "sleep", "dark", "miles"); 
  $replace_to = array($singular_noun, $verb, $color, $distance_unit);

  $story = "\nThe ${singular_noun}s are lovely, ${color}, and deep.\nBut I have promises to keep,\nAnd ${distance_unit} to go before I ${verb},\nAnd ${distance_unit} to go before I ${verb}.\n";
$story_result = str_replace($replace_from, $replace_to, $story);
return $story_result;
}

echo generateStory("water", "eat", "turquoise", "miles");
echo generateStory("skie", "sleep", "blue", "miles");
echo generateStory("empty void", "dream", "grey", "miles");
echo generateStory("forest", "leave", "green", "miles");