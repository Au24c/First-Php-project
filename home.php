<?php
echo "LOL"."<br>";
print "LOL"."<br>";
print_r ("LOL"."<br>"); //print_r is used for arrays
//eg.:
$anArray = [1, "two", 3, 4, "banana"];
print_r($anArray);
echo "<br>";
//var_dump shows data type also with values
$anyValue = 0;
var_dump($anyValue);

//for loop
for($i=1; $i<=10; $i++){
    echo "<br>".$i;
}