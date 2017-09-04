<?php

// $arr = $arr_history = array(
  // "Ok, I lay me down to sleep, creepin' a slumber under red skies, heads splittin', straight sippin' a drip of dead vibes, It's red tides from here, stop and smell analog hell, Clenchin' a stench of burnin' logics and a child with yearning optics.",
  //
  // "Billy-goat beard twenty years in the making, Carried lures in his brim, carried beer in his waders, stinked like alcohol of all prominent flavors, carried knives in his vest, carried war in his nature, sat among the forest floor critters and pine cones, could tie a perfect fly with his eyes closed, Veteran angler with a mission to run, Make all naysayers hold t-t-t-tongues.",
  //
  // "Ease back; let a heart thump echo normalcy for 10, let the back burner boiling point descend, I race the derby in the first heat (strike personal) Strike personal space with the most utterly putrid version of grace.",
  //
  // "Busting accidental dirt bike donuts, outside the most ridiculous poison tongue brain silo, dead before the chubby debutante conquered the high note, schooled by the cruel intention inventions pensive sideshow.",
  //
  // "Earth to AR vertical burden has increased at an alarming rate, bliss is down a point, murder up, glee down and still falling, still crawling out of bed at 2 on Saturdays, came this blind soldier-burning confessional."
// );
//
// $lines = isset($_GET['lines']) ? $_GET['lines'] : 3;
//
//
// for ( $i = 0; $i < $lines; $i++ )
// {
//   // If the history array is empty, re-populate it.
//   if ( empty($arr_history) )
//     $arr_history = $arr;
//
//   // Randomize the array.
//   array_rand($arr_history);
//
//   // Select the last value from the array.
//   $selected = array_pop($arr_history);
//
//   // Echo the selected value.
//   echo $selected . PHP_EOL;
//   echo "<hr />";
// }

// ===================================================
// LINES

$lines_array = array(

  "Ok, I lay me down to sleep, creepin' a slumber under red skies, heads splittin', straight sippin' a drip of dead vibes, It's red tides from here, stop and smell analog hell, Clenchin' a stench of burnin' logics and a child with yearning optics.",

  "Billy-goat beard twenty years in the making, Carried lures in his brim, carried beer in his waders, stinked like alcohol of all prominent flavors, carried knives in his vest, carried war in his nature, sat among the forest floor critters and pine cones, could tie a perfect fly with his eyes closed, Veteran angler with a mission to run, Make all naysayers hold t-t-t-tongues.",

  "Ease back; let a heart thump echo normalcy for 10, let the back burner boiling point descend, I race the derby in the first heat (strike personal) Strike personal space with the most utterly putrid version of grace.",

  "Busting accidental dirt bike donuts, outside the most ridiculous poison tongue brain silo, dead before the chubby debutante conquered the high note, schooled by the cruel intention inventions pensive sideshow.",

  "Earth to AR vertical burden has increased at an alarming rate, bliss is down a point, murder up, glee down and still falling, still crawling out of bed at 2 on Saturdays, came this blind soldier-burning confessional.",

  "My first name is a random set of numbers and letters, and other alphanumerics that changes hourly forever, my last name, a thousand vowels fading down a sinkhole to a susurrus, couldn't just be John Doe or Bingo.",

  "Let me put you up on Bob's donuts, controller of the warm deep fryer that charms cobras. Picture if you will a witching hour on a weak night in the trenches, where paranoia dead-ends in a bright florescent heaven with sprinkles, I know right, yum!",

  "Today I pulled three ghost crabs out of rock and sand, where the low tide showcased a promised land."

);
$linesTemp = $lines_array;
shuffle( $linesTemp );


// ===================================================
// TITLES


$titles_array = array(

  "Let a sucker drift, I lift up every stone prone to find",
  "And a scent, your riddles yield a little plastic blend",
  "Once my breath is dispersed, My God, you think the heavens touched the earth",
  "Ease back; let a heart thump echo normalcy for 10",
  "Let the back burner boiling point descend",
  "Sit and sweat bullets on a console",
  "Outside the most ridiculous poison tongue brain silo",
  "Ok, I lay me down to sleep, creepin' a slumber under red skies",
  "Therefore it is and the melody settles",
  "I get more guidance from my barber",


);
$titlesTemp = $titles_array;
shuffle( $titlesTemp );




// ==============================================







function getLine()
{
  global $lines_array;
  global $linesTemp;

  $val = array_pop( $linesTemp );

  if (is_null($val))
  {
    $linesTemp = $lines_array;
    shuffle( $linesTemp );
    $val = getLine();
  }
  return $val;
}

// ------

// ***** MERGE THIS INTO ONE FUNCTION

function getTitle()
{
  global $titles_array;
  global $titlesTemp;

  $val = array_pop( $titlesTemp );

  if (is_null($val))
  {
    $linesTemp = $titles_array;
    shuffle( $titlesTemp );
    $val = getLine();
  }
  return $val;
}


// // =================
// // Loop them
//
// $lines = isset($_GET['lines']) ? $_GET['lines'] : 10;
//
// for ( $i = 0; $i < $lines; $i++ )
//  {
// echo getLine();
// echo "<hr />";
// }
//
//
// // =================
// // Titles, we don't need to loop - just pluck
// echo "<p>Titles:</p>";
// echo "<h1>" .getTitle(). "</h1>";
// echo "<h2>" .getTitle(). "</h2>";

?>
