<?php
/**
 * PHP - Random Quote Generator 
 * @author: Randy Layne
 * purpose: To display a random quote from an array of quotes to the browser
 */

// Array used to store the quotes and other information
$quotes = [
  [
    'quote'     => 'You can do anything but not everything.',
    'source'    => 'David Allen',
    'citation'  => 'Making it all work',
    'year'      => 2009,
    'tags'      => ['Philosophical']
  ],
  [
    'quote'     => 'There is nothing permanent except change.',
    'source'    => 'Heraclitus'
  ],
  [
    'quote'     => 'Don\'t cry because it\'s over, smile because it happened.',
    'source'    => 'Dr. Seuss',
    'tags'      => ['Philosophical', 'Inspirational']
  ],
  [
    'quote'     => 'Every artist was first an amateur',
    'source'    => 'Ralph Waldo Emerson',
    'citation'  => 'Essays: First Series',
    'year'      => 1841,
    'tags'      => ['Art', 'Inspirational']
  ],
  [
    'quote'     => '\'Cause you know I love the players, and you love the game.',
    'source'    => 'Taylor Swift',
    'citation'  => 'Blank Space',
    'year'      => 2014,
    'tags'      => ['Pop', 'Humor']
  ],
  [
    'quote'     => 'Glory is fleeting, but obscurity is forever.',
    'source'    => 'Napolean Bonaparte',
    'year'      => 1812,
    'tags'      => ['Historical', 'War', 'Leadership']
  ]
];

/**
 * Get a random quote from the array
 * @param mixed[] $array An array of quote arrays
 * @return mixed[] A single quote array
 */
function getRandmQuote($array) 
{
  $randIndex = mt_rand(0, count($array) - 1); 
  return $array[$randIndex];
}

/**
 * Print a single quote in the browser window
 * @param mixed[] $array An array of quote arrays
 */
function printQuote($array) {
  
  // get a random quote
  $quote = getRandmQuote($array);

  // message to output to the browser
  $output = '<p class="quote" >' . $quote['quote'] . '</p>';
  $output .= '<p class="source">' . $quote['source'];

  if ($quote['citation']) {
    $output .= '<span class="citation">' . $quote['citation'] . '</span>';
  }

  if ($quote['year']) {
    $output .= '<span class="year">' . $quote['year'] . '</span>';
  }
  $output =  $output . '</p>'; 

  if ($quote['tags']) {
    $output .= '<p class="tags" >Tags: ';

    // display the first tag
    $output .= $quote['tags'][0];
    
    // loop through any remaining tags and display them
    for ($i = 1; $i < count($quote['tags']); $i++) {
      $output .= ', ' . $quote['tags'][$i];
    }

    $output .= '</p>';
  }

  echo $output;
}

/**
 * Creates a random low to mid range hex value color to use as the  
 * background. Good for use with light fonts.
 * @return string A hex value color
 */
function getRandomColor() {

  // variable to store the color as it's built
  $color = '#';

  // generate 3 random 0 - 9 values for the abbreviated hex color.
  for ($i = 0; $i < 3; $i++) {
    $color .= mt_rand(0, 9);
  }

  return $color;
}
  