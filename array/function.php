<?php
echo "\\array reverce function\\";
$reverse = array( 10 , 20 , 30 ,40 , 50 );
$rev = array_reverse($reverse , true );
echo "<pre>";
print_r($rev);
echo "</pre>";

function reverce($rev){

	$re = array_reverse($rev, true);
	return $re;


}

 $result=reverce($reverse);
echo "<pre>";
print_r($result);
echo "</pre>";



function rev($rev){

	$re = array_reverse($rev);
	return $re;


}

 $result=rev($reverse);
echo "<pre>";
print_r($result);
echo "</pre>";


$reverse1 = array( 'english' , 'urdu' , 'math' ,'physics ' , 'pakstudy');
// $rev = array_reverse($reverse , true );
// echo "<pre>";
// print_r($rev);
// echo "</pre>";

function reverce1($rev){

	$re = array_reverse($rev, true);
	return $re;


}

 $result=reverce1($reverse1);
echo "<pre>";
print_r($result);
echo "</pre>";



echo "\\array duplicate  function\\";
$array1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$array2 = array("a"=>"red","b"=>"black","h"=>"yellow");
// $array3 = array("e"=>"red","f"=>"black","g"=>"purple");
 
$output = array_intersect($array1,$array2);
echo "<pre>";
print_r($output);
echo "</pre>";


function duplicate($array,$array2){
	$output = array_intersect($array,$array2);
	return $output;

}

$result = duplicate($array1,$array2);
echo "<pre>";
print_r($result);
echo "</pre>";



$name1 = array('ali ', 'ahsan', 'muzamil', 'mujahid','zain'  );
$name2 = array('ali ', 'abdullah', 'asad', 'abuzar','zain'  );

function duplicatename($var1,$var2){
	$nameoutput = array_intersect($var1, $var2);
	return $nameoutput;
}

$result =  duplicatename($name1,$name2);
echo "<pre>";
print_r($result);
echo "</pre>";

$name3 =[
					['ahsan', 'ali', 'amjad', 'zain'],
					['amjad', 'zain ', 'muzamil', 'hamza'],
					['zain','zubair', 'hyder']


					];

$name4 = [

				  ['zain', 'faizan', 'kamran'],
				  ['ali ', 'usama ','zubair'],
				  ['zain', 'umar','usman']


			  ];

function dname($var3,$var4){       
	$name = array_intersect($var3,$var4);
	return $name;
} 
$result = dname($name3,$name4);
echo "<pre>";
print_r($result);
echo "</pre>";



?>