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
			<H1>Rock, paper, scissors</H1>
		</div>
		<div class="scoreboard">
			<H2>Your Score:</H2>
			<!-- <p> php tag with yourScore</p> -->
			<H2>Computer Score:</H2>
			<!-- <p>php tag with computerScure</p> -->
		</div>


		<form action="index.php" method="post">
			<div class="gameField">

				<H3>Your pick:</H3>
				<input type="checkbox" name="name" id="rock" value="rock">
				<label for="rock">Rock</label>
				<input type="checkbox" name="name" id="paper" value="paper">
				<label for="paper">Paper</label>
				<input type="checkbox" name="name" id="scissors" value="scissors">
				<label for="scissors">Scissors</label>


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