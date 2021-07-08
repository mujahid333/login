<?php
echo "\\php Array\\";
$data  = array(10 , 20 , 30 , 40 );
echo "<pre>";
print_r($data);
echo "</pre>";


$data  = array('ali'  , 'ahmed' , 'mohsin' , 'mujahid' );
echo "<pre>";
print_r($data);
echo "</pre>";

echo "\\array push   to add in last \\ ";
array_push($data, 'malik');
echo "<pre>";
print_r($data);
echo "</pre>";

echo "array unshift   to add in start  ";
array_unshift($data, 'malik');
echo "<pre>";
print_r($data);
echo "</pre>";

echo "array unset   to delete specific  index  ";
unset($data[2]);
echo "<pre>";
print_r($data);
echo "</pre>";




$slice =  array( 10, 20, 30 , 40 , 50   );
echo "array slice   to show  from anywhere  ";
$new = array_slice($slice, 1, 2);
echo "<pre>";
print_r($new);
echo "</pre>";


// echo "array diff   to remove specific  in array  ";
// array_diff($data, 2,0);
// echo "<pre>";
// print_r($data);
// echo "</pre>";



echo "array pop   to delete last value ";
array_pop($data );
echo "<pre>";
print_r($data);
echo "</pre>";



$data1 = array( 
				'name1' => 'ali',
				'name2' => 'asad',
				'name3' => 'ahmed'

				);
echo "<pre>";
print_r($data1);
echo "</pre>";


echo "array splice   to add in spicific ";
$data  = array('ali'  , 'ahmed' , 'mohsin' , 'mujahid' );
array_splice($data, 4,0, 'insert');
echo "<pre>";
print_r($data);
echo "</pre>";



echo "\\array\\";
$array = array('ali', 'ahmed ', 'khan ', 'asad' );
echo "<pre>";
print_r($array);
echo "</pre>";

echo "\\add in the start of array\\";
$array = array('ali', 'ahmed ', 'khan ', 'asad' );
array_unshift($array, 'zain', 'zahid');
echo "<pre>";
print_r($array);
echo "</pre>";


echo "\\add in the last of array\\";
$array = array('ali', 'ahmed ', 'khan ', 'asad' );
array_push($array, 'zain', 'zahid');
echo "<pre>";
print_r($array);
echo "</pre>";

echo "\\add in spicific index of array\\";
$array = array('ali', 'ahmed ', 'khan ', 'asad' );
array_splice($array,3,0, 'zain', );
echo "<pre>";
print_r($array);
echo "</pre>";


echo "\\delete  first index \\";
$array = array('ali', 'ahmed ', 'khan ', 'asad' );
array_shift($array );
echo "<pre>";
print_r($array);
echo "</pre>";

echo "\\delete  last index \\";
$array = array('ali', 'ahmed ', 'khan ', 'asad' );
array_pop($array, );
echo "<pre>";
print_r($array);
echo "</pre>";

echo "\\delete  spicific  index \\";
$array = array('ali', 'ahmed ', 'khan ', 'asad' );
unset($array[2], );
echo "<pre>";
print_r($array);
echo "</pre>";

echo "\\show any  index \\";
$array = array('ali', 'ahmed ', 'khan ', 'asad' );
$new = array_slice($array, 2, 2 );
echo "<pre>";
print_r($new );
echo "</pre>";

echo "\\add in array in start\\";
$data = array( 10,20,30,40,50,);
array_unshift($data, 0);
echo "<pre>";
print_r($data);
echo "</pre>";

echo "\\add in aray in last \\";
$data = array( 'red', 'green', 'blue');
array_push($data , 'gary');
echo "<pre>";
print_r($data);
echo "</pre>";

echo "\\ insert in spicific index\\";
$data = array('apple', 'banana', 'orange ');
array_splice($data,2,0,'stobre');
echo "<pre>";
print_r($data);
echo "</pre>";


echo "\\delete in start \\";
$data = array('apple', ' banana ', 'orange ' );
array_shift($data);
echo "<pre>";
print_r($data);
echo "</pre>";


echo "\\delete in last \\";
$data = array( 'apple','banana', 'orange', );
array_pop($data);
echo "<pre>";
print_r($data);
echo "</pre>";


echo "\\delete spicific \\";
$data = array('apple','banana', 'orange ','stobree', );
unset($data[1]);
echo "<pre>";
print_r($data);
echo "</pre>";


echo "\\add in multidimentional array\\";

$data = array(
			   array( 'zain ', 20 , 48 ),
			   array('asad', 30 , 25),
			   array('ali', 30 , 45)

				);
array_push($data[2], 'math');
echo "<pre>";
print_r($data);
echo "</pre>";

echo "\\add in multidimentional array\\";
$data = [
	       ['orange',  'banana ', 'apple '],
	       [ 'zain', 'ali', 'asad'],
	       ['math' ,'urdu ', 'english'],

			];

array_unshift($data[0], 'peach');
echo "<pre>";
print_r($data);
echo "</pre>";

array_unshift($data[2], 'paks tudy');
echo "<pre>";
print_r($data);
echo "</pre>";

array_pop($data[2]);
echo "<pre>";
print_r($data);
echo "</pre>";



// echo "\\spicific add in multidimentional array\\";
// $data = [
// 	       ['orange',  'banana ', 'apple '],
// 	       [ 'zain', 'ali', 'asad'],
// 	       ['math' ,'urdu ', 'english'],

// 			];

// array_splice($data,[0][1],[0][0], 'peach');
// echo "<pre>";
// print_r($data);
// echo "</pre>";



echo "\\spicific show  in multidimentional array\\";
$data1 = [
	       ['orange',  'banana ', 'apple '],
	       [ 'zain', 'ali', 'asad'],
	       ['math' ,'urdu ', 'english'],

			];

 $new = array_slice($data1,[1][0],3 );
echo "<pre>";
print_r($new);
echo "</pre>";




echo "\\array reverce function\\";

$reverse = array( 10 , 20 , 30 ,40 , 50 );
$rev = array_reverse($reverse , true );
echo "<pre>";
print_r($rev);
echo "</pre>";

function reverce($reverse){

	$re = array_reverse($reverse, true);
	return $re;


}

$result=  reverce($reverse);
echo "$result";





?>