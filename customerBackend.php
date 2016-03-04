 <?php

echo "<link href='style.css'
            rel='stylesheet'
            type='text/css'>";

$user = $_POST["username"];
$pass = $_POST["password"];
$Gonzo = $_POST["Gonzo"];
$Ginger = $_POST["Ginger"];
$Sammy = $_POST["Sammy"];
$shipping = $_POST["shipping"];

$shippingcost;
$onehundred=100.00;
$fifty=50.00;


echo "Welcome " . ($user) . "<br>";
echo "Password: " . ($pass) . "<br>";

echo "<table class='reciept'>";

echo "<tr class = 'darkpurple'>";
	echo "<td class = 'darkpurple'></td>";
	echo "<td class = 'darkpurple'>Quantity</td>";
	echo "<td class = 'darkpurple'>Cost Per Item</td>";
	echo "<td class = 'darkpurple'>SubTotal</td>";
echo"</tr>";

echo "<tr class = 'darkpurple'>";
	echo "<td class = 'darkpurple'>Gonzo</td>";
	echo "<td class = 'purple'>".$Gonzo."</td>";
	echo "<td class = 'purple'>$".$onehundred."</td>";
	echo "<td class = 'purple'>$".($Gonzo*$onehundred)."</td>";
echo"</tr>";

echo "<tr class = 'darkpurple'>";
	echo "<td class = 'darkpurple'>Ginger</td>";
	echo "<td class = 'purple'>".$Ginger."</td>";
	echo "<td class = 'purple'>$".$fifty."</td>";
	echo "<td class = 'purple'>$".($Ginger*$fifty)."</td>";
echo"</tr>";

echo "<tr class = 'darkpurple'>";
	echo "<td class = 'darkpurple'>Sammy</td>";
	echo "<td class = 'purple'>".$Sammy."</td>";
	echo "<td class = 'purple'>$".$onehundred."</td>";
	echo "<td class = 'purple'>$".($Sammy*$onehundred)."</td>";
echo"</tr>";

echo "<tr class = 'darkpurple'>";
	echo "<td class = 'darkpurple'>Shipping</td>";
	echo "<td class = 'darkpurple' colspan='2'>".$shipping."</td>";
	if($shipping == "Free 7 day")
	{	
		echo "<td class = 'darkpurple'>$0</td>";
		$shippingcost=0;
	}
	if($shipping == "$50.00 over night")
	{	
		echo "<td class = 'darkpurple'>$50</td>";
		$shippingcost=50;
	}
	if($shipping == "$5.00 three day")
	{	
		echo "<td class = 'darkpurple'>$5.00</td>";
		$shippingcost=5;
	}
echo"</tr>";

echo "<tr class = 'darkpurple'>";
	echo "<td class = 'darkpurple' colspan='3'>Total Cost</td>";
	echo "<td class = 'darkpurple'>$".($shippingcost+($Sammy*$onehundred)+($Ginger*$fifty)+($Gonzo*$onehundred))."</td>";
echo"</tr>";

echo "</table>";

?>
