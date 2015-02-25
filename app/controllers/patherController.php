<?php

class patherController extends \BaseController {
 
  public function run() {
    
    function find_hash_coordinates($file_name) {
      $all_hash_coords = array();

      $input_file = fopen($file_name, 'r', true);
      
      $y_coord = 0; //WHERE IT STARTS TO READ THE FILE.

    //FIND THE COORDINATES OF THE HASH SYMBOLS IN THE INPUT FILE:
      while( !feof($input_file) ) {

        $y_coord = $y_coord +=1;

        // READ EACH LINE:
        $line = fgets($input_file);
        $characters = str_split($line); //CONVERT STRING TO ARRAY
        // echo"<pre>";
        // print_r($characters);
        // echo "</pre>";
        // echo "</br>";
        // echo "</br>";

          foreach( $characters as $index=>$character ) {
            if ($character == '#') {
              $x = $index+1;
              $y = $y_coord;
              $hash_coords = [$x, $y];
              array_push($all_hash_coords, $hash_coords);
            }
          }
      }
      // echo "Position of Hash Coordinates: ";
      // echo "</pre>";
      // echo"<pre>";
      // print_r($all_hash_coords);
      // echo"</pre>";

      return $all_hash_coords;

    }

    function make_a_path($h) {
      $all_hash_coords = $h;

      foreach ($all_hash_coords as $hash) {
        $x = $hash[0];
        $y = $hash[1];
        for($i; $i=15; $i++) {
          
        }
        echo "(" . $x . ", " . $y . ")";
        echo "</br>";
      }

      exit;

      $output_file = fopen('output.txt', 'w');
      fwrite($output_file, $output);
      fclose($output_file);
    
    }
    
  $hash_locations = find_hash_coordinates('input.txt');
  make_a_path($hash_locations);

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
