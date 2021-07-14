<?php
echo "\\in array search\\";
$people = array("ali", "usman", "zain", "hyder" ,"mohsin");

$result =in_array("zain", $people);
echo "if value found it will return true means 1 on falls means  0 will never show";
echo "<pre>";
print_r ($result);
echo "</pre>";


echo "Program that prints the next 20 leap year";
 
function leapyear($var) {
    for($i=$var;$i<2081;$i++){
        if ($i % 4 == 0) {
            echo $i."is an leap year<br>";   
         }
    }
}
$year = 2000;
 $result = leapyear($year);
 echo "<pre>";
print_r ($result);
echo "</pre>";


?>