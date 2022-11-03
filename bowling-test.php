<?php 
include "vendor/autoload.php";
use App\Bowling;

function bowling() : int
{   
    $score=0;
    $game2=0;
    $game = new Bowling();
    $game1= rand(0, 10);
    if ($game1 !== 10){
        $game2 = rand(0, (10-$game1));
    }
    $gameScores = [$game1, $game2];
    foreach ($gameScores as $score) {
        $game->newThrow($score);
    }
    try{
        $score = $game->getCurrentScore();
    }catch(Exception $error){
        echo $error->getMessage();
    }finally{
        return $score;    
    }

};

$score=0;
for ($i=0; $i<10; $i++){
    $score += bowling();
}
echo $score;