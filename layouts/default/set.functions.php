<?php

/*
 * Layout functions
 */

// `encrypt`
//
// Encrypts `$data` with base64.
function encrypt($data) {
  echo base64_encode($data);
}

// `decrypt`
//
// Decrypts `$data` with base64.
function decrypt($data) {
  echo base64_decode($data);
}

// `is_currentfile`
//
// Checks for current file. Returns boolean.
function is_currentfile($file) {
  if (strpos($_SERVER['PHP_SELF'], $file)) {
    return true;
  }
}

// `filecount`
//
// Counts number of files in a directory. `$dir` must be without a trailing
// slash.
function filecount($dir) {
  $i = 0;
  foreach (glob($dir . '/*') as $file) {
    if (!is_dir($file)) {
      $i++;
    }
  }
  echo $i;
}

// `feedparse`
//
// Parses RSS or Atom feed.
function feedparse($url) {
  $feed = fopen($url, 'r');
  $data = stream_get_contents($feed);
  fclose($feed);
  echo $data;
}

// `randomize`
//
// Selects a random value from array.
function randomize($array) {
  echo $array[array_rand($array)];
}

// `undot`
//
// Removes dots from string.
function undot($string) {
  $string = str_replace('.', '', $string);
}