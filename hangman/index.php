<?php

// import words from the file

$words = file('words.txt');

// choose random word
$word = rtrim($words[array_rand($words)]);

// length of the letter
$lenWord = strlen($word);

// guesses array

$guesses = ["a", "e"];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Simple Hangman game in Php</title>

	<style>
		* {
			padding: 0;
			margin: 0;
		}
		body {
			font-family: 'Poppins', sans-serif;
			height: 100vh;
			background-color: #fff;
			width: 100%;
		}


		nav {
			display: flex;
			align-content: center;
			justify-content: space-between;
			margin: 12px;
			padding: 12px;
		}

		nav ul li {
			display: inline;
			list-style: none;

		}
		nav ul li a {
			text-decoration: none;
			padding: 5px;
			margin: 5px;
		color: black;


		}
		nav ul li a:hover{
			color: red;
		}
		.container{
			max-width: 100%;
			margin: 0 20px 0 20px;
		}
		.container .box{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: space-evenly;
		}


	</style>
</head>
<body>
	
	<header>
		<nav>
			<h1>Hangman Game</h1>
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">Github</a></li>
			</ul>
		</nav>
	</header>


	<div class="container">
		<div class="box">
			<p> Welcome to my simple hangman game</p>

			<?php  for ( $i=0; $i < $lenWord; $i++){

				if (in_array($word[$i], $guesses)) {
					echo $word[$i];
				}else{
					echo "_";
				}

				echo " ";


		}
			?>
		</div>
		

	</div>
</body>
</html>
