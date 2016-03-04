 <?php
//access the global array called $_POST to get the values from the text fields
$color = $_POST["color"];
$date = $_POST["date"];
$book = $_POST["book"];
$food = $_POST["food"];
$eyes = $_POST["eyes"];

$correct;
$percentage = 0;
if($color=="green")
{
	$correct++;
	$percentage+=20;
}
if($date=="March 14")
{
	$correct++;
	$percentage+=20;
}
if($book=="Midnight in the Garden of Good and Evil")
{
	$correct++;
	$percentage+=20;
}
if($food=="Artichoke")
{
	$correct++;
	$percentage+=20;
}
if($eyes=="heterochromatic")
{
	$correct++;
	$percentage+=20;
}

echo "Question 1: What is Kate's favorite color? <br>";
echo "You answered: " . ($color) . "<br>";
echo "Correct answer: green <br>";
echo "<br>";
echo "Question 2: When is Kate's birthday? <br>";
echo "You answered: " . ($date) . "</br>";
echo "Correct answer: March 14 <br>";
echo "<br>";
echo "Question 3: What is Kate's favorite book? <br>";
echo "You answered: " . ($book) . "<br>";
echo "Correct answer: Midnight in the Garden of Good and Evil <br>";
echo "<br>";
echo "Question 4: What is Kate's favorite food? <br>";
echo "You answered: " . ($food) . "<br>";
echo "Correct answer: Artichoke<br>";
echo "<br>";
echo "Question 5: What color are Kate's eyes?<br>";
echo "You answered: " . ($eyes) . "<br>";
echo "Correct answer: heterochromatic<br>";

echo "<br>";

echo "You answered " . ($correct) . " correctly<br>";
echo "Percentage Score: " . ($percentage) . "%";

?>
