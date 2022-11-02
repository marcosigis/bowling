# Benjamin Beugnet Web Services

- Level 1: Bowling

## Bowling rules
The goal is to knock down all 10 pins
Each frame consists of throwing the ball twice to knock down all the pins
There are 10 frames in a game
If you knock down all the pins with the first ball, it is called a strike
If you knock down all the pins with the second ball, it is called a spare
Scoring is based on the how many pins you knock down. However, if you bowl a spare, you get to add the pins in your next ball to that frame. For strikes, it is the same with the next two balls.
If you do a strike or a spare in the last frame, you can throw 1 more ball for a spare and 2 for a strike to calculate your bonus. The balls thrown after the 10th frame only count for the bonus.
The maximum score is 300 if you do 12 strike in a row (the 2 last ones only count for the strike bonus).

## Your task
- Initialize composer for your project and make good use and implementation of namespaces
- In your Bowling class, implement the methods:

newThrow: that takes the number of pins down as an int and returns nothing.
getCurrentScore: that takes no input and returns an int representing the player score.

- Once you finished you can change the url of this repository, push on your own repo and send me the link for analysis.

## Test
a test can be found in bowling-test.php If you think some are missing, you can add yours.
To see if your test has succeed you can launch
php bowling-test.php