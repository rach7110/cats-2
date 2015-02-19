<?php

class patherController extends \BaseController {
 
  public function run() {
    
    $x_coord = 0;
    $y_coord = 0;

    $hash_coords = [
      'x_hash' => false,
      'y_hash' => false
    ];

    $output_file = fopen('output.txt', 'w');

    $input_file = fopen('input.txt', 'r', true);

  //FIND THE COORDINATES OF THE HASH SYMBOLS IN THE INPUT FILE:
    while( !feof($input_file) ) {

      $y_coord = $y_coord +=1;

      // READ EACH LINE:
      $line = fgets($input_file);
      $characters = str_split($line); //CONVERT STRING TO ARRAY
      // $x_max = count($string);
      print_r($characters);
      echo "</br>";
      echo "</br>";

      // for($x; $x <= $x_max; $x++) {
        foreach( $characters as $index=>$character ) {
          if ($character == '#') {
            $hash_coords['x_hash'] = $index;
            $hash_coords['y_hash'] = $y_coord;

            return $hash_coords;
          }
        }

        print_r($hash_coords);
        // echo "</br>";

      // }

    }
    exit;

    // fwrite($output_file, $output);

    fclose($output_file);
    
  }

  // ........................

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
