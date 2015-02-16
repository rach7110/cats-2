
 <?php

  $battleships = [];


  $x = 0;
  $y = 0;


// READ INPUT FILE:
  $input = file_get_contents('input.txt');
  echo $input;
  exit;
// FIND COORDINATES OF HASH SYMBOLS IN GRID DIAGRAM:
while($scan) {
  $value = //read the input file at location x,y and get character.

  //IF '*' IS FOUND, MOVE ONE CORDINATE TO THE RIGHT (SAME ROW):
    if($value == '*') {
      $x+=1;
      $y=y;
  // IF A BLANK IS FOUND AT THE END OF A ROW, MOVE DOWN ONE ROW AND START AT FIRST COLUMN:
    } elseif(value == nil && x > abs(y)) {
      $x = 0;
      $y -= 1;
  // IF '#' IS FOUND, RECORD ITS COORDINATES:
    } elseif(value == '#') {
      $coord_1 = []
      array_push(coord_1, x, y);
      array_push(battleships, coord_1)
  // IF A BLANK IS FOUND AT THE START OF A ROW, WE'VE REACHED THE END:
    } elseif(value == nil && x < abs(y)) {
      $scan = false;
    }
  }

// INSERT ASTERISKS:

  }