<?php 

use APP\Bowling;

function bowling() 
{
    $game = new Bowling();
    $gameScores = [2, 4];
    foreach ($gameScores as $score) {
        $game->newThrow($score);
    }
    try{
        if($game->getCurrentScore() === 6){
            echo "success ! your score is : " . $game->getCurrentScore();
        }
    }catch(Exception $error){
        echo $error->getMessage();
    }
};

bowling();