<!DOCTYPE html>
<!-- php tag -->
<?php
	require_once("assignment.php");

$week1 = new Assignment("Week 1 - PHP Basics");
$week1->assignment("Pas de Standard Tag en Echo Tag toe");

	//echo en standaard tag
	$week1->echoThis(htmlspecialchars("<?php ?>"));
	$week1->echoThis(htmlspecialchars("<?= ?>"));
	?><?php

	// single line comment 1

	#single line comment 2

	/*
	multi line comment
	*/

$week1->endAssignment();
$week1->assignment("Experimenteer met de 4 scalar data-types en toon aan met de gettype-functie welke data-type je gebruikt hebt ");

	// boolean
	$story = true;
	$week1->echoThis("Result boolean: " . gettype($story));

	// int
	$int = 1;
	$week1->echoThis("Result int: " . gettype($int));

	// float
	$php = 5.6;
	$week1->echoThis("Result float: " . gettype($php));

	// string
	$weekOne = '1';
	$week1->echoThis("Result int: " . gettype($weekOne));

$week1->endAssignment();
$week1->assignment("Experimenteer met type-casting voor elke data-type");

	$week1->echoThis("Result casting: " . gettype((string) $story) . ", ". gettype((string) $int) . ", ". gettype((int) $php) . ", ". gettype((double) $weekOne));
	
	//cast to array
	$i = (array) 7;
	$week1->dumpThis($i);

	//casting functions
	$string = "8";
	$toInt = intval($string);
	$toFloat = floatVal($string);
	$toString = strval($toFloat);
	$toBool = boolval($string);
	$new = "9";
	$nl = null;
	class Obj1{}
	$obj1 = new Obj1;
	settype($new, "integer"); //returns a boolean value so only define it --->
	$week1->echoThis("Casting functions: <br>");
	$week1->echoThis($toInt . " is a(n) " . gettype($toInt) . "<br>");
	$week1->echoThis($toFloat . " is a(n) " . gettype($toFloat) . "<br>");
	$week1->echoThis($toString . " is a(n) " . gettype($toString) . "<br>");
	$week1->echoThis($toBool . " is a(n) " . gettype($toBool) . "<br>");
	$week1->echoThis($new . " is a(n) " . gettype($new) . "<br>");//-->and call variable to get the actual value
	$week1->echoThis(is_int($toInt) . " " . is_float($toFloat) . " " . is_string($toString) . " " . is_bool($toBool)
	 . " " . is_null($nl) . " " . is_array($i) . " " . is_object($obj1));

$week1->endAssignment();
$week1->assignment("Experimenteer met type-casting van array naar een object ");
	
	$object = (object) $i;
	$week1->dumpThis($object);

$week1->endAssignment();
$week1->assignment("Experimenteer met variable variablen");

	
	$secret = 'youRock';		
	$$secret = 'You Suck!'; //$$secret references the contents of $secret, creating the new variable $youRock
	$week1->echoThis("Results variable variables: " . $youRock);

	$a = 'start';
	$b = 'a';
	$c = 'b';
	$d = 'c';

	$week1->echoThis("Nested variable variables:<br>" . $d . "<br>" . $$d . "<br>" . $$$d . 
		"<br>" . $$$$d . "<br>");

	//circumventing naming constraints
	$number = '123';
	$$number = 'I\'m in an invalid variable';	
	$week1->echoThis(${'123'} . "<br>"); //echo out variable 

$week1->endAssignment();
$week1->assignment("Pas CONSTANTS toe in een PHP-script");

	define('STATEMENT', 'Dogs are better pets than cats.');
	const WALL = "Wall";
	$week1->echoThis("Result constants:" . STATEMENT . " " . WALL);
$week1->endAssignment();
$week1->assignment("Experimenteer met var_dump, print_r en debug_zval_dump");
	//var dump
	$week1->dumpThis("Result var_dump: ". STATEMENT);

	//print_r
	$pets = array('dogs', 'cats', 'rabbits', 'rhinos');
	$week1->printRThis($pets);

	//debug_zval_dump
	$week1->zvalThis($pets);
$week1->endAssignment();
$week1->assignment("Pas de isset() en empty() functies toe ");
	
	//isset and empty
	$notNull = "";
	if(isset($notNull))
		$week1->echoThis("Variable is set");

	if(!empty($notNull))
		$week1->echoThis("Variable is set");
	else
		$week1->echoThis("Variable is empty but not null");

$week1->endAssignment();
$week1->assignment("Experimenteer met de veelgebruikte operators: Assignment Operators, de 6 Arithmetic Operators, String Operators, Comparison Operators (4 Equivalence Operators en 2 Inequality Operators) en Logical Operators");
	
	//concatenation
	$youRock .= " Just Kidding!";	
	$weight = 500;

	$week1->echoThis("Concatenation: " . $youRock . "<br>" . "Yo Momma weighs " . $weight . " tonnes");

	//multiplication
	$weight *= 20;
	$week1->echoThis("Multiplication: Yo Momma weighs " . $weight . " tonnes");

	//exponentiation
	$weight **= 2;
	$week1->echoThis("Exponentiation: Yo Momma weighs " . $weight . " tonnes");

	//divison
	$weight /= 2;
	$week1->echoThis("Yo Momma lost weight, she only weighs " . $weight . " tonnes now");

	//addition
	$binary0 = 0;
	$binary1 = 1;
	$week1->echoThis("Yo momma so fat, her facebook profile consists of " . ($binary1+2) . "\'s and " . ($binary0+2) . "\'s, instead of " . $binary1 . "\'s and " . $binary0 . "\'s.");

	//subtraction
	$neck = 1;
	$week1->echoThis("Yo momma so fat she has " . ($neck-1) . " neck");
	
	//modulus
	$chins = 8;
	$week1->echoThis("Yo momma so fat she has " . ($chins%3) . " extra chins"); 

	//string operatpr
	$yoMomma = 'Yo momma';
	$still = " is still fat";
	$week1->echoThis($yoMomma . $still);

	//same as
	$weight = 10;
	$newWeight = $weight;
	$week1->echoThis("Looking good! Only weighing "  . $newWeight . " tonnes now instead of " . $weight . "... Oh wait!"); 

	//comparison operators
	$yoMomma = 10;
	$result = "";
	//equal
	if($yoMomma == 10)
		$result = 'still fat';

	$week1->echoThis("Yo moma is " . $result);

	//identical
	if($yoMomma === '10')
		$week1->echoThis("Maybe I was wrong");
	else
		$week1->echoThis("Nope.");

	//not equal
	$yoMomma = 'fat';

	if($yoMomma != 'fat')
		$week1->echoThis("Maybe I was wrong");
	else
		$week1->echoThis("Nope.");

	$cruiseShipSize = 9;

	if($yoMomma <> $cruiseShipSize)
		$week1->echoThis("She\'s probably bigger...");
	else
		$week1->echoThis("Woah!");

	// Not identical
	$yoMomma = 10;

	if($yoMomma !== 10)
		$week1->echoThis("She\'s probably bigger...");
	else
		$week1->echoThis("thought so...");

	// >, <, >=. <=
	$week1->echoThis("Result >, <, >=. <=:<br>");
	if($yoMomma > $cruiseShipSize)
		$week1->echoThis("yup");
	echo '<br>';
	if($yoMomma >= $cruiseShipSize)
		$week1->echoThis("yup");
	echo '<br>';
	if($yoMomma < ($cruiseShipSize + 2))
		$week1->echoThis("Only by a bit tho...");

	if($yoMomma <= ($cruiseShipSize + 2))
		$week1->echoThis("Only by a bit tho...");

	//logical operators 'and' same as &&
	$week1->echoThis("Result logical operators:<br>");
	$pinocchioNoseGrows = true;
	$pinocchioSaysNoseIsGrowing = true;
	if($pinocchioNoseGrows and $pinocchioSaysNoseIsGrowing)
		$week1->echoThis("how?");

	// or ||
	if($pinocchioNoseGrows or $pinocchioSaysNoseIsGrowing)
		$week1->echoThis("can\'t logically have both");

	// xor
	if($pinocchioNoseGrows xor $pinocchioSaysNoseIsGrowing)
		$week1->echoThis("paradox, the universe will implode");

$week1->endAssignment();
$week1->assignment("Experimenteer met Bitwise Operators, Error Control Operators, Execution Operators, Incrementing/Decrementing Operators en Type Operators ");

	// ~
	$i = 10533214;
	$week1->echoThis("<br>Result bitwise operators:<br>" . ~$i);

	// & 
	if(rand(1, 1000) & 1)
	    $week1->echoThis("Odd number."); //rightmost bit is 1, so it will always be an odd number
	else
	    $week1->echoThis("Even number.");  //rightmost bit is 0, so it will always be an even number

	//Note: This method is faster performance wise to check for even and odd numbers than %2

	// |
	$x=5;  
	$y=11;  
	$week1->echoThis(x | $y); 

	// ^
	$x=12;  
	$y=11;  
	$week1->echoThis($x ^ $y);

	// << and >>

	//Error control operators
	$week1->echoThis("Result error control operator:<br>");
	// $db = @mysql_connect( "unconnectable.com" );
	// if( $db === false )
	// {
	//    $week1->echoThis("Could not connect to server.");
	//    exit();
	// }

	//backticks
	$week1->echoThis("Backticks<br>");
	$host = 'www.google.com';
	    $week1->echoThis(`ping -n 3 {$host}`);

	// Incrementing/Decrementing Operators
	$week1->echoThis("Result Incrementing/Decrementing Operators:<br>");
	$blah = 50;
	$week1->echoThis(++$blah);

	$blah = 50;
	$week1->echoThis($blah++ . " after->" . $blah);

	$blah = 50;
	$week1->echoThis(--$blah);

	$blah = 50;
	$week1->echoThis($blah-- . ' after->' . $blah);

	//Type Of
	$week1->echoThis("Result Type Of<br>");
	class PHP
	{
	}

	class CyberSecurity
	{
	}
	$class = new PHP;

	$week1->dumpThis($class instanceof PHP);
	$week1->dumpThis($class instanceof CyberSecurity);

$week1->endAssignment();
$week1->assignment("Experimenteer met if-elseif-else statements, en nested if-else statements ");
	//if else & nested
	$week1->echoThis("Result if else & nested:");
	$rand = rand(1, 10);

	if($rand == 1)
		$week1->echoThis($rand . ": bad");
	elseif($rand == 2)
		$week1->echoThis($rand . ": still bad");
	elseif($rand > 2)
		if($rand == 3)
			$week1->echoThis($rand . ": still kinda bad");
		elseif($rand == 4)
			$week1->echoThis($rand . ": below average");
	else
		$week1->echoThis($rand . ": good enough");
$week1->endAssignment();
$week1->assignment("Experimenteer met de ternary operator en laat in een comment een vergelijkbare if/else statement zien");

	//ternary
	$week1->echoThis("Result Ternary Operator:");
	$result = ($rand < 5) ? "meh: " : "good enough: "; //if($rand < 5) $result = 'meh' else $result = 'good enough';
	$week1->echoThis($result . $rand);

$week1->endAssignment();
$week1->assignment("Experimenteer met een if/else-statement i.c.m. de isset() en empty() functies ");

	//ifelse + isset()/empty()
	$week1->echoThis("Result ifelse + isset()/empty()");
	$notset = '';

	if(!empty($notset))
		$week1->echoThis($notset);
	elseif(isset($notset))
		$week1->echoThis("is set but empty");

$week1->endAssignment();
$week1->assignment("Experimenteer met switch-case statement (incl default)");
	//switch
	$week1->echoThis("Result switch:");
	switch($rand)
	{
		case 1:
		case 2:
		case 3:
			$week1->echoThis("Score is: " . $rand . " which is bad");
			break;
		case 4:
		case 5:
		case 6:
			$week1->echoThis("Score is: " . $rand . " which is not that great");
			break;
		case 7:
		case 8:
			$week1->echoThis("Score is: " . $rand . " which is great");
			break;
		case 9:
		case 10:
			$week1->echoThis("Score is: " . $rand . " which is amazing");
			break;
		default:
			$week1->echoThis("Score not set...");
			break;
	}

$week1->endAssignment();
$week1->assignment("Experimenteer met while, do/while, for, for each en pas ook break en continue toe ");

	//while, do-while, for, foreach, break continue
	$week1->echoThis("Result while, do-while, for, foreach, break continue:");
	$i = 0;
	do
	{
		$week1->echoThis("Just do it");
		$i++;
	}
	while($i > 3); //stops right away

	$s = 0;
	while($s < 2)
	{
		for($n = 0; $n < 21023; $n++)
		{
			if($n == 1){
				$week1->echoThis("skipping a bunch of iterations");
				continue;
			}
		}
		$week1->echoThis("stopping after first while loop");
		break;
	}

	foreach($pets as $pet)
		$week1->echoThis($pet);

$week1->endAssignment();
$week1->assignment("Pas in 2 verschillende bestanden de 2 manieren voor namespaces toe ");
$week1->endAssignment();
$week1->assignment("Pas in 1 bestand 2 verschillende namespaces toe ");
$week1->endAssignment();
$week1->assignment("Pas de namespaces toe in een bestand");
	//namespaces
	$week1->echoThis("Result namespaces:");
	include('include_me.php');
	$week1->echoThis($include);

	require('require_me.php');
	$week1->echoThis($require);

$week1->endAssignment();
$week1->assignment("Experimenteer met sub-namespaces ");
$week1->endAssignment();
$week1->assignment("Experimenteer met namespaces: Dynamic Usage en Aliasing ");

	//Dynamic Usage
	use Again\Thanks;

	$class = new Thanks\Hello();
	
	$week1->echoThis($class->blah());

	//Aliasing
	use Again\Thanks\Hello as Hi;

	$hi = new Hi();
	$hi->blah();
	$week1->echoThis($hi->blah());

$week1->endAssignment();
$week1->endWeek();
?>	
</html>