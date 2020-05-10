<?php

class Driver
{
    //Properties
    public $name;
    public $file;

    //Constructor 
    public function __construct($name, $file)
    {
        $this->name = $name;
        $this->file = $file;
    }

    //Method
    public function Guess($guessOutOf, $correctGuesses, $road)
    {
        while ($correctGuesses < count($road)) {

            $slump = mt_rand(0, count($guessOutOf) - 1);

            $myGuess = $guessOutOf[$slump];

            echo "<p>" . $myGuess;
            $wrong = ($myGuess !== $road[$correctGuesses]);

            if ($myGuess == $road[$correctGuesses]) {
                $correctGuesses++;
                $removedWay = array_splice($guessOutOf, $slump, 1);
                echo " Correct!";
            }
            if ($wrong) {
                echo " Wrong turn...";
                $handle = fopen($this->file, 'w') or die('Cannot open file:  ' . $this->file);
                $wrongTurns = $myGuess;
                fwrite($handle, "You took this failing turn: " . $wrongTurns);
            }
        }
    }
}
