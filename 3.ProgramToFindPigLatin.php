<html>
<body>
	<h1 style="text-align: center;">Pig Latin Conversion</h1>
<form action="piglatin.php" method="post">
Enter a String to be converted to pig latin : <input type="text" name="number" id = "number">
<input type="submit" name="submit" onclick="f();">

</form>
</body>
<?php
 if (isset($_POST['submit']))
 {
$r=$_POST['number'];
convert_to_array($r);
 }
function convert_to_array($r) {
$words = explode(' ', $r);
//print_r($words);

foreach ($words as $element) {
	
 $i= substr($element, 0, 1);
$o = ltrim($element, $element[0]);

 $u= $o.$i."ay&nbsp;";

echo strtolower($u);

}

}

?>  
</html>