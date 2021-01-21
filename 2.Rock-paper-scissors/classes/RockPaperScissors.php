<?php

class RockPaperScissors
{

    //Variables needed
    public $yourPick;
    public $computerPick;
    public $yourScore;
    public $computerScore;
    public $result;

    public function run()
    {
        // This function functions as your game "engine"
        // Now it's on to you to take the steering wheel and determine how it will work

         
        if(!empty($_POST['name'])) {
            //Player pick
            $this->yourPick = $_POST['name'];

            //TODO: Computer picks random choice
            $this->computerChoice();
            //Calculate win or loss
            $this->gameResult();
           
            if(!empty($_SESSION['computerScore'])){
                $this->computerScore = $_SESSION['computerScore'];
            }
            if(!empty($_SESSION['yourScore'])){
                $this->yourScore = $_SESSION['yourScore'];
            }
           
        };
        //TODO: Display score
        $_SESSION['computerScore'] = $this->computerScore;
        $_SESSION['yourScore'] = $this->yourScore;
    }

    public function computerChoice()
    {
        $computerPick = array("Rock", "Paper", "Scissors");
        $this->computerPick = $computerPick[array_rand($computerPick)];
    }
    
    public function gameResult(){

        if ($_POST['name'] === "rock") {
            // == because the value is the same but not the the exact same variable
            if ($this->computerPick == 'Paper') {
                $this->result = "You Lost!";
                $_SESSION['computerScore']++;
            }
            if ($this->computerPick == 'Rock') {
                $this->result = "DRAW!";
            }
            if ($this->computerPick == 'Scissors') {
                $this->result = "You Won!";
                $_SESSION['yourScore']++;
            }
        }

        if ($_POST['name'] === "paper") {
            if ($this->computerPick == 'Paper') {
                $this->result = "DRAW!";
            }
            if ($this->computerPick == 'Rock') {
                $this->result = "You Won!";
                $_SESSION['computerScore']++;
            }
            if ($this->computerPick == 'Scissors') {
                $this->result = "You Lost!";
                $_SESSION['yourScore']++;
            }
        }

        if ($_POST['name'] === "scissors") {
            if ($this->computerPick == 'Paper') {
                $this->result = "You Won!";
                $_SESSION['yourScore']++;
            }
            if ($this->computerPick == 'Rock') {
                $this->result = "You Lost!";
                $_SESSION['computerScore']++;
            }
            if ($this->computerPick == 'Scissors') {
                $this->result = "DRAW!";
            }
        }

    }
     
}