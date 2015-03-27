<?php 
/*
$mySalary = 90000;
$bonus = 7000;
$mnTax = .25;
$iaTax = .35;
$wiTax = .40;
$myState = "Minnesota";
$yourState = "Wisconsin";


//MyIncome($mySalary, $bonus);

if ($myState == "Minnesota") {
	echo "<p> Minnesota Income After Tax: " . 
		IncomeAfterTax($mySalary, $mnTax) . "</p>";
}

if ($yourState == "Wisconsin") {
	echo "<p> Wisconsin Income After Tax: " .
		IncomeAfterTax($mySalary, $wiTax) . "</p>";
}

*/
/* functions below *//*
function MyIncome($mySalary, $bonus) {
	$total = $mySalary + $bonus;
	return $total;
}

function IncomeAfterTax($salary, $tax) {
	$total = $salary * (1-$tax);
	return $total;
}
*/
?>


<?php 

date_default_timezone_set('UTC');
$todaysDate = time("2015-03-26");
$finalDate = strtotime("2015-05-08");

	
echo "<p> Print current date here -->" . date(" Y-m-d") . "</p>";

echo DaysLeft($todaysDate, $finalDate) . " Days left till Finals are overrr!! </p>";

// function below doesn't incorporates the 26th and the 8th

function DaysLeft($todaysDate, $finalDate) {
	$datediff = $finalDate - $todaysDate;
	echo floor($datediff/(60*60*24)+1);
}


// Jakes sloppy code


echo (128 - (date("z")+1)) . " DAYS LEFT UNTIL FINALS ARE OVER! <br>";



	
// Sav's cool code

/*date_default_timezone_set('UTC');
$todaysDate = strtotime(date('2015-03-26'));
$finalDate = strtotime(date('2015-05-08'));

function DaysLeft($todaysDate, $finalDate) {
	return $daysLeft = $finalDate - $todaysDate;
}

echo "days left:" . idate('z', DaysLeft($todaysDate, $finalDate));
	*/
?>