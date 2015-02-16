<?php

class patherController extends \BaseController {


  public function run() {
    $input = file_get_contents('input.txt', true);
    return $input;

  }

}