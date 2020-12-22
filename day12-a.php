<!DOCTYPE html>
<html>
<head>
<?php
$COLOR='cyan';
$color='lightgreen';
?>
	<title></title>
</head>
<body>
<p style="background-color: <?php echo $color?>">
	Meghan Trainor (born December 22, 1993) is an American singer-songwriter and talent show judge. Her 2014 debut single "All About That Bass" reached number one on the US Billboard Hot 100 chart and sold 11 million copies worldwide. She won the 2016 Grammy Award for Best New Artist. Trainor has released three studio albums with Epic Records. In 2015, her pop and hip hop album, Title, included the top-10 singles "Lips Are Movin" and "Like I'm Gonna Lose You". It debuted at number one on the US Billboard 200. The single "No" led her R&B album Thank You (2016); both the song and the album reached number three on the respective charts. Trainor has had voice roles in the animated films Smurfs: The Lost Village (2017) and Playmobil: The Movie (2019), and has served as a judge on the television talent shows The Four: Battle for Stardom (2018) and The Voice UK (2020). She has won four ASCAP Pop Music Awards and two Billboard Music Awards.
</p>
<p style="background-color: <?php echo $COLOR?>">
	A great conjunction is a conjunction of the planets Jupiter and Saturn, when the two planets appear closest together in the sky. Great conjunctions, named "great" for being the rarest and one of the brightest and closest on average of the conjunctions between "naked eye" planets (i.e. not counting the rarer conjunctions involving the ice giants as they were too dim to be discovered until after the invention of the telescope), occur approximately every 20 years when Jupiter "overtakes" Saturn in its orbit. 
</p>
<?php 
$count = 5;
?>
<ul>
<?php
echo "<li>$count</li>";
$count++;
echo "<li>++$count</li>";
$count++;
echo "<li>++$count</li>";
$count+= 5;
echo "<li>+=$count</li>";
?>
</ul>
<?php
$number;
$remainder;
$group = "";

$number = 45;
$remainder = $number % 2;

if ($remainder == 0) {
	$group = "even";
} else {
	$group = "odd";
}

echo "$number is an $group number.";

?>
</body>
</html>