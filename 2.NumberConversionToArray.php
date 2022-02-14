
<!--Write a function that takes a number and returns an array of its digits.-->
<html>
<body>
	<h1 style="text-align: center;">Number Conversion to Array</h1>
<form action="array.php" method="post">
Enter a Number to Convert to array : <input type="text" name="number" id = "number">
<input type="submit" name="submit">

</form>
</body>
<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{

$n=$_POST['number'];
convert_to_array($n);
}
function convert_to_array($n) {


$array  = array_map('intval', str_split($n));

echo "The array of number&nbsp;". $n."&nbsp;is&nbsp;";
var_dump($array);
}


?>
</html>

