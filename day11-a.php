<!DOCTYPE html>
<html>
<head>
	<title>day11 <b>A</b></title>
</head>
<body>
<h1>Day 11 php!!!</h1>
<?php
$pi = 3.14159;
$color = "goldenrod";
//its a good rule to put all your variables in one place above
echo "<h2>THE <u>Value</u> of pi is $pi</h2>";
echo '<h3>the value of pi is $pi</h3>';
echo '<h4>the value of pi is ' . $pi . '</h4>';
?>
<hr>
<p style="background-color: <?php echo $color; ?>">Sergo Ordzhonikidze (1886–1937) was a Bolshevik and Soviet politician from Georgia. Joining the Bolsheviks at a young age, he became an important figure and was arrested repeatedly. After the Bolsheviks came to power in 1917, he oversaw the invasions of Azerbaijan, of Armenia, and of Georgia. He backed their union into the Transcaucasian Socialist Federative Soviet Republic in 1922, one of the original Soviet republics, and served as its first secretary until 1926. He then oversaw Soviet economic production and led a massive overhaul; he implemented five-year plans, helped create the Stakhanovite movement and was named to the Politburo. He was reluctant to join the campaign against so-called wreckers and saboteurs in the early 1930s, causing friction with Joseph Stalin. Before a meeting where he was expected to denounce workers, Ordzhonikidze shot himself. He was posthumously honoured, and several towns and cities in the Soviet Union were named after him. </p>
<hr/>
<?php
$num1 = 45;
$num2 = 7;
$result;

$result = $num1 + $num2;
echo "<p>$num1 + $num2 = $result</p>";

$result = $num1 - $num2;
echo "<p>$num1 - $num2 = $result</p>";

$result = $num1 * $num2;
echo "<p>$num1 * $num2 = $result</p>";

$result = $num1 / $num2;
echo "<p>$num1 / $num2 = $result</p>";

$result = $num1 % $num2;
echo "<p>$num1 % $num2 = $result</p>";

$result = $num1 . $num2;
echo "<p>$num1 . $num2 = $result</p>";
?>
asdasd
</body>
</html>