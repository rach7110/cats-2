<?php

class patherController extends \BaseController {
 
  public function run() {
    
    $grid = [];
    $fp = fopen('output.txt', 'w');

    $handle = fopen('input.txt', 'r', true);
    while( !feof($handle) ) {
      $line = fgets($handle);
      fwrite($fp, $line);
      array_push($grid, $line);
    }

    fclose($fp);
    
  }

}
// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
// TOOLBOX:
// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

// ****************************************************************************************************************************
    // FILE() 
    // RETRUNS FILE CONTENTS AS AN ARRAY CONSISTING OF THE LINE NUMBER AND THE DATA IN THAT LINE NUMBER (STARTING AT 0):
    // Works great - expecially if you need line numbers!
// ****************************************************************************************************************************
    // $lines = file('input.txt', true);
    // foreach($lines as $line_number=>$line) {
    //   echo $line_number . " " . $line;
    //   echo "</br>";
    // }

// ****************************************************************************************************************************
    // FGETS()
    // READ DATA FROM A FILE LINE BY LINE
    // WORKDS GREAT!!!
// ****************************************************************************************************************************
    // $handle = fopen('input.txt', 'r', true);

    // while( !feof($handle) ) {
    //   $data = fgets($handle);
    //   print $data;
    //   echo "</br>";
    // }

// ****************************************************************************************************************************
    // FILE_GET_CONTENTS() 
    // RETURNS FILE CONTENTS AS A STRING:
// ****************************************************************************************************************************
    // $data = file_get_contents('input.txt', true);
    // echo $data;

// ****************************************************************************************************************************
    //  FREAD()
    // RETURNS FILE CONTENTS AS A STRING. MUST OPEN THE FILE FIRST WITH THIS METHOD.
    // 
// ****************************************************************************************************************************


// ****************************************************************************************************************************
    // FEOF()
    // TESTS FOR END-OF-FILE ON A FILE POINTER.
// ****************************************************************************************************************************
