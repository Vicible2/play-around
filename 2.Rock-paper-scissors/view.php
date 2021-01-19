<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Casino royale - rock, paper, scissors</title>
</head>

<body>

	<div class="game">

		<div class="title">
			<hr>
			<H1>Rock, paper, scissors</H1>
		</div>
		<div class="scoreboard">
			<H3>Your Score:</H3>
			<p> <?php echo $game->yourScore ?></p>
			<H3>Computer Score:</H3>
			<p> <?php echo $game->computerScore ?></p>
		</div>


		<form action="index.php" method="post">
			<div class="gameField">


				<h3>Computer Pick:
					<?php 
						if(!empty($_POST['name'])){
						echo $game->computerPick;
						}
					?>
				</h3>


				<H3>Your pick:
					<?php 
						if(!empty($_POST['name'])){
						echo ucfirst($_POST['name']);
						}
					 ?>
				</H3>

				<input type="checkbox" name="name" id="rock" value="rock">Rock</input>
				<input type="checkbox" name="name" id="paper" value="paper">Paper </input>
				<input type="checkbox" name="name" id="scissors" value="scissors">Scissors</input>


				<p> rock paper or scissors with php</p>

				<button type="submit" name="submit">Play!</button>
			</div>
		</form>
	</div>
	<!-- TODO: Form with following items:

Your pick:
Rock, paper, scissors (buttons/dropdown/...)
yourScore

Computer pick: (empty until play button is submitted)
computerScore

submit/play button

You win / you Lose. -->
</body>

</html>