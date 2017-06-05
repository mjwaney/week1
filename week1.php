<!-- php tag -->
<?php 
?>

<!-- echo tag -->
<?= 'echo tag<br>'; ?>

<?php
	// single line comment 1

	#single line comment 2

	/*
	multi line comment
	*/

	// boolean
	echo '<br>Result boolean:<br>';
	$story = true;
	echo gettype($story) . '<br>';

	// int
	echo '<br>Result int:<br>';
	$week1 = 1;
	echo gettype($week1) . '<br>';

	// float
	echo '<br>Result float:<br>';
	$php = 5.6;
	echo gettype($php) . '<br>';

	// string
	echo '<br>Result string:<br>';
	$weekOne = '1';
	echo gettype($weekOne) . '<br>';

	//casting
	echo '<br>Result casting:<br>';
	echo gettype((string) $story) . '<br>';
	echo gettype((string) $week1)  . '<br>';
	echo gettype((int) $php) . '<br>';
	echo gettype((int) $weekOne) . '<br>';

	//variable variables
	echo '<br>Result variable variables:<br>';
	$secret = 'youRock';
	$$secret = 'You Suck!';
	echo $youRock;
	echo '<br>';

	//constants
	echo '<br>Result constants:<br>';
	define('STATEMENT', 'Dogs are better pets than cats.');
	echo STATEMENT;
	echo '<br>';

	//var dump
	echo '<br>Result var_dump:<br>';
	var_dump(STATEMENT);

	//print_r
	echo '<br>Result print_r:<br>';
	$pets = array('dogs', 'cats', 'rabbits', 'rhinos');
	print_r($pets);
	echo '<br>';

	//debug_zval_dump
	echo '<br>Result zval_dump:<br>';
	debug_zval_dump($pets);
	echo '<br>';

	//isset and empty
	echo '<br>Result isset:<br>';
	$notNull = "";

	if(isset($notNull))
		echo $notNull . " is set";
	echo '<br>';


	echo '<br>Result empty:<br>';
	if(!empty($notNull))
		echo $notNull . " is set";
	else
		echo 'empty but not null';

	// cast from array to object
	echo '<br>Result casting arry to object:<br>';
	$petObject = (object) $pets;
	var_dump($petObject);

	
	//assignment operator & arithmetic operators

	//concatenation
	echo '<br>Result assignment operator & arithmetic operators:<br>';
	$youRock .= " Just Kidding!";
	echo $youRock;
	echo '<br>';

	$weight = 500;
	echo 'Yo Momma weighs ' . $weight . ' tonnes';
	echo '<br>';

	//multiplication
	$weight *= 20;
	echo 'Yo Momma weighs ' . $weight . ' tonnes';
	echo '<br>';

	//exponentiation
	$weight **= 2;
	echo 'Yo Momma weighs ' . $weight . ' tonnes';
	echo '<br>';

	//divison
	$weight /= 2;
	echo 'Yo Momma lost weight, she only weighs ' . $weight . ' tonnes now';
	echo '<br>';

	//addition
	$binary0 = 0;
	$binary1 = 1;
	echo 'Yo momma so fat, her facebook profile consists of ' . ($binary1+2) . '\'s and ' . ($binary0+2) . '\'s, instead of ' . $binary1 . '\'s and ' . $binary0 . '\'s.';
	echo '<br>';

	//subtraction
	$neck = 1;
	echo 'Yo momma so fat she has ' . ($neck-1) . ' neck';
	echo '<br>';
	
	//modulus
	$chins = 8;
	echo 'Yo momma so fat she has ' .($chins%3) . ' extra chins'; 
	echo '<br>';

	//string operatpr
	$yoMomma = 'Yo momma';
	$still = " is still fat";
	echo $yoMomma . $still;
	echo '<br>';

	//same as
	$weight = 10;
	$newWeight = $weight;
	echo 'Looking good! Only weighing '  . $newWeight . ' tonnes now instead of ' . $weight . '... Oh wait!'; 
	echo '<br>';

	//comparison operators
	echo '<br>Result comparison operators:<br>';
	$yoMomma = 10;

	//equal
	if($yoMomma == 10)
		echo 'still fat';

	echo '<br>';

	//identical
	if($yoMomma === '10')
		echo 'Maybe I was wrong';
	else
		echo 'Nope.';

	echo '<br>';

	//not equal
	$yoMomma = 'fat';

	if($yoMomma != 'fat')
		echo 'Maybe I was wrong';
	else
		echo 'Nope.';

	echo '<br>';
	$cruiseShipSize = 9;

	if($yoMomma <> $cruiseShipSize)
		echo 'She\'s probably bigger...';
	else
		echo 'Woah!';
	echo '<br>';

	// Not identical
	$yoMomma = 10;

	if($yoMomma !== 10)
		echo 'She\'s probably bigger...';
	else
		echo 'thought so...';
		echo 'yup';
	echo '<br>';

	// >, <, >=. <=
	echo '<br>Result >, <, >=. <=:<br>';
	if($yoMomma > $cruiseShipSize)
		echo 'yup';
	echo '<br>';
	if($yoMomma >= $cruiseShipSize)
		echo 'yup';
	echo '<br>';
	if($yoMomma < ($cruiseShipSize + 2))
		echo 'Only by a bit tho...';
	echo '<br>';
	if($yoMomma <= ($cruiseShipSize + 2))
		echo 'Only by a bit tho...';
	echo '<br>';

	//logical operators 'and' same as &&
	echo '<br>Result logical operators:<br>';
	$pinocchioNoseGrows = true;
	$pinocchioSaysNoseIsGrowing = true;
	if($pinocchioNoseGrows and $pinocchioSaysNoseIsGrowing)
		echo 'how?';
	echo '<br>';

	// or ||
	if($pinocchioNoseGrows or $pinocchioSaysNoseIsGrowing)
		echo 'can\'t logically have both';
	echo '<br>';

	// xor
	if($pinocchioNoseGrows xor $pinocchioSaysNoseIsGrowing)
		echo 'paradox, the universe will implode';
	echo '<br>';

	echo '<br>Result bitwise operators:<br>';
	// ~
	$i = 10533214;
	echo ~$i;
	echo '<br>';

	// & 
	if(rand(1, 1000) & 1)
	    echo "Odd number."; //rightmost bit is 1, so it will always be an odd number
	else
	    echo "Even number.";  //rightmost bit is 0, so it will always be an even number
	echo '<br>';

	//Note: This method is faster performance wise to check for even and odd numbers than %2

	// |
	$x=5;  
	$y=11;  
	echo $x | $y; 

	// ^
	$x=12;  
	$y=11;  
	echo $x ^ $y;

	// << and >>

	//Error control operators
	echo '<br>Result error control operator:<br>';
	// $db = @mysql_connect( "unconnectable.com" );
	// if( $db === false )
	// {
	//    echo "Could not connect to server.";
	//    exit();
	// }
	echo '<br>';

	//backticks
	echo '<br>Backticks<br>';
	$host = 'www.google.com';
	    echo `ping -n 3 {$host}`;
	echo '<br>';

	// Incrementing/Decrementing Operators
	echo '<br>Result Incrementing/Decrementing Operators:<br>';
	$blah = 50;
	echo ++$blah;
	echo '<br>';

	$blah = 50;
	echo $blah++ . ' after->' . $blah;
	echo '<br>';

	$blah = 50;
	echo --$blah;
	echo '<br>';

	$blah = 50;
	echo $blah-- . ' after->' . $blah;
	echo '<br>';

	//Type Of
	echo '<br>Result Type Of<br>';
	class PHP
	{
	}

	class CyberSecurity
	{
	}
	$class = new PHP;

	var_dump($class instanceof PHP);
	var_dump($class instanceof CyberSecurity);

	//if else & nested
	echo '<br>Result if else & nested:<br>';
	$rand = rand(1, 10);

	if($rand == 1)
		echo $rand . ": bad";
	elseif($rand == 2)
		echo $rand . ": still bad";
	elseif($rand > 2)
		if($rand == 3)
			echo $rand . ": still kinda bad";
		elseif($rand == 4)
			echo $rand . ": below average";
	else
		echo $rand . ": good enough";
	echo '<br>';

	//ternary
	echo '<br>Result Ternary Operator:<br>';
	$result = ($rand < 5) ? 'meh: ' : 'good enough: '; //if($rand < 5) $result = 'meh' else $result = 'good enough';
	echo $result . $rand;
	echo '<br>';

	//ifelse + isset()/empty()
	echo '<br>Result ifelse + isset()/empty()<br>';
	$notset = '';

	if(!empty($notset))
		echo $notset;
	elseif(isset($notset))
		echo 'is set but empty';
	echo '<br>';

	//switch
	echo '<br>Result switch:<br>';
	switch($rand)
	{
		case 1:
		case 2:
		case 3:
			echo "Score is: " . $rand . " which is bad";
			break;
		case 4:
		case 5:
		case 6:
			echo "Score is: " . $rand . " which is not that great";
			break;
		case 7:
		case 8:
			echo "Score is: " . $rand . " which is great";
			break;
		case 9:
		case 10:
			echo "Score is: " . $rand . " which is amazing";
			break;
		default:
			echo "Score not set...";
			break;
	}
	echo '<br>';

	//while, do-while, for, foreach, break continue
	echo '<br>Result while, do-while, for, foreach, break continue:<br>';
	$i = 0;
	do
	{
		echo "Just do it <br>";
		$i++;
	}
	while($i > 3); //stops right away

	$s = 0;
	while($s < 2)
	{
		for($n = 0; $n < 21023; $n++)
		{
			if($n == 1){
				echo "skipping a bunch of iterations <br>";
				continue;
			}
		}
		echo "stopping after first while loop";
		break;
	}
	echo '<br>';

	foreach($pets as $pet)
		echo $pet . '<br>';

	//namespaces
	echo '<br>Result namespaces:<br>';
	include('include_me.php');
	echo $include;
	echo '<br>';

	require('require_me.php');
	echo $require;
	echo '<br>';

	//Dynamic Usage
	use Again\Thanks;

	$class = new Thanks\Hello();
	
	$class->blah();
	echo '<br>';

	//Aliasing
	use Again\Thanks\Hello as Hi;

	$hi = new Hi();
	$hi->blah();
	echo '<br>';

?>	