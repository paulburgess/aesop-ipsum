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

  "Ok, I lay me down to sleep, creepin' a slumber under red skies, heads splittin', straight sippin' a drip of dead vibes. It's red tides from here, stop and smell analog hell, clenchin' a stench of burnin' logics and a child with yearning optics.",

  "Billy-goat beard twenty years in the making, carried lures in his brim, carried beer in his waders, stinked like alcohol of all prominent flavors, carried knives in his vest, carried war in his nature. Sat among the forest floor critters and pine cones, could tie a perfect fly with his eyes closed, veteran angler with a mission to run, make all naysayers hold t-t-t-tongues.",

  "Ease back; let a heart thump echo normalcy for 10, let the back burner boiling point descend, I race the derby in the first heat (strike personal) Strike personal space with the most utterly putrid version of grace.",

  "Busting accidental dirt bike donuts, outside the most ridiculous poison tongue brain silo, dead before the chubby debutante conquered the high note, schooled by the cruel intention inventions pensive sideshow.",

//  "Earth to AR vertical burden has increased at an alarming rate, bliss is down a point, murder up, glee down and still falling, still crawling out of bed at 2 on Saturdays, came this blind soldier-burning confessional.",

  "My first name is a random set of numbers and letters, and other alphanumerics that changes hourly forever, my last name, a thousand vowels fading down a sinkhole to a susurrus, couldn't just be John Doe or Bingo.",

  "Let me put you up on Bob's donuts, controller of the warm deep fryer that charms cobras. Picture if you will a witching hour on a weak night in the trenches, where paranoia dead-ends in a bright florescent heaven with sprinkles, I know right, yum!",

  "Today I pulled three ghost crabs out of rock and sand, where the low tide showcased a promised land.",

  "Please hold for the don't-play dull boy, click: I am not a page or a pull toy. Came in the door and the floor is lava, killjoy if your core more Norman Rockwell.",

//  "That engine sputters while the hound dogs wire cutter mechnical rabbit. Bantam weight puppies ain't rabid enough to snatch him.",

  "Bantamweight temper tantrum, decrepit anthem, set a low goal, I arrive late.",

  "I forever wallow in glitches, grimly distributed by side effects, consumed, cocooned in antisocial trenches, drenched.",

  "I make music and connect color to canvas, swoop down from the trees with potpourris and other bandits. Landed randomly upon the valleys of the grimace, saw my planted leaf start burnin from the oustide in.",

  "Soul crafted fat cats, burrowin', left perennial tenants discouraged in. Discussing my four-season flourishing.",

  "I got a mantle, and the mantle is a candle, and my candle is a flame that burns to symbolize the day Gretel met Hansel. Then I settle at a stand still.",

  "Oh it'll be soon, balloon immune to doom blend, I ain't ditchin' the kitchen til every spoon bends.",

  "I'm quadruple six plus scruples category mayhem stems, so one overlooked the scene including loopholes.",

  "You're cordially invited to accompany me, in rotations of the tables to label the opposition. As I choose, refusing to evolve with the cold,
rapidly dissolved my involvement in a solvent of soul and roll back",

"Let 'em shake a little, then release 'em, Like, as if ghostly hysterics would leech on band aid completion.",

"We cadets hold determination as property undeniably divine; we leak passion for the noise. There is not a track to cherish from he who lacks merit.",

"In a cradle I label the dreaded simulation we compile, tenents embeded within synthetic inclination. We have never dined on bait so when corrupt crooks hook simple Samaritans' eyes buried in books.",

"While cannily panicking was the average. I broadcast modern boredom mesozoic poetry pupils. Caught up in scruples from the inimical nature of my program.",

"Close encounters of the first kind, contact cursed minds skies red. Stuck sitting spinning world wide webs, over whim and worry flurried on your sidesteps.",

"Pays quicken upon asphalt light source sun burst beams, a portrait of pillage, multiple put-downs paint burn marks on perception.",

"Relentless agent hush horrendous circles on my pavement, two sticks to burn basics the lie adjacent to my placement.",

"This is a never dug disco, Zoo York tycoon, memorandum bonanza banter clamp crunk out the fish bowl.",

"I used to have a rope ladder but tattered were the rungs, I strung it from the highest willow, trying to hug the sun.",

"Grief leaf thief briefly turned chieftan, the tapwater's on, the water's off, the water's leaking.",

"What a long capitol crust, gallop my charriot burning and awful enigma, sprung by the sling of David appears gutterbug batch, prior to hatch, dismiss it as a soul condensing, excuse to decorate maps with thumb tacks this gold star product, pushing hate boogie themes enter the smoke screen blazing saddle remnants."


);
$linesTemp = $lines_array;
shuffle( $linesTemp );


// ===================================================
// TITLES


$titles_array = array(

  "Let a sucker drift, I lift up every stone prone to find",
  "And a scent, your riddles yield a little plastic blend",
//  "Once my breath is dispersed, My God, you think the heavens touched the earth",
  "Ease back; let a heart thump echo normalcy for 10",
  "Let the back burner boiling point descend",
  "Sit and sweat bullets on a console",
  "Outside the most ridiculous poison tongue brain silo",
  "Ok, I lay me down to sleep, creepin' a slumber under red skies",
  "Therefore it is and the melody settles",
  "I get more guidance from my barber",
  "Where the wild strawberry vines toss and turn",
  "Pinball whiz in a thimble of Sims",
  "Fraggle rock your four figure watch",
  "Crooked rumors turn zoomers when rookies talkin'",
  "Candid once position from which instigations spawn",
  "See the root of the mute button was dug up bug up on a song",
  "Cats know the ambiance calm beyond comparison",
  "So one overlooked the scene including loopholes",
  "Desire on the opposite circuit and glorious days",
  "When linked we let our eyelids fall and pilots stall",
  "Now taciturn facets burn open to yield malarkey navigator",
  "Pilot burner riddle of trades, divinity, composers",
  "Ebonics lurking where the crop circles got stamped out from the rain dance",
  "Axis pivotal point spun all to often",
  "Collapsing scaffold mad pole crusher russian robot recruits",
  "Iron clad oracle test three COM unit disperse silently",
  "Now what of the madness fragments? Stagnant",
  "Sling blanks sprayed it with apathy magic balance",
  "Edgy from elevensies to megabucks",
  "Cherry pick blue in the pale",








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



function loopLines($from, $to) {

  for ( $i = 0; $i < rand($from, $to); $i++ )
  {
    echo getLine();
    echo " ";
  }

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
