<!DOCTYPE html>  
<html>  
<body>  
<?php  
if (isset($_POST['submit']))
{
    //Initialize array
   
   //n determine the number of times an array should be rotated   
$n=$_POST['number'];
convert_to_array($n);

}
   
  function convert_to_array($n) {
    $arr = array(1, 2, 3, 4, 5); 
//Displays original array  
print("The Original array is : <br>");  
for ($i = 0; $i < count($arr); $i++) {   
    print($arr[$i] . " ");   
}    
      
//Rotate the given array by n times toward left  
for ($i = 0; $i < $n; $i++){  
    //Stores the first element of the array  
    $first = $arr[0];  
      
    for($j = 0; $j < count($arr)-1; $j++){  
        //Shift element of array by one  
        $arr[$j] = $arr[$j+1];  
    }  
    //First element of array will be added to the end  
    $arr[$j] = $first;  
}  
   
print("<br>");  
   
//Displays resulting array after rotation  
print("Array after rotation is : <br>");  
for ($i = 0; $i < count($arr); $i++) {   
    print($arr[$i] . " ");   
} 

}
?>  
</body>  
<form action="rotatearray.php" method="post">
Enter a Number to Convert to array : <input type="text" name="number" id = "number">
<input type="submit" name="submit">

</form>
</html>  