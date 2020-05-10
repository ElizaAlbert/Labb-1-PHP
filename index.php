<?php

include 'driver.class.php';

//Right, Forward, Left
$road = [
    "R", "F", "L", "F", "R", "L", "R", "F", "R", "L", "F", "L"
];

$guessOutOf = $road;
$correctGuesses = 0;

$file = "wrongTurns.csv";

$driver = new Driver("Driver", $file);

$driver->Guess($guessOutOf, $correctGuesses, $road);
