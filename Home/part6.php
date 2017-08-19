<?php
$h = 'Hello1';
echo md5($h);
?>
<br />
==================================
<br />
<?php
$A=[
    'a'=>'one',
    'b'=>'two',
    'c'=>'three'
];
// $A2= array_reverse($A);
print_r($A);
echo "<br />";
// print_r($A2);
$A3= array_reverse($A,true);
echo "<br />";
print_r($A3)
?>
<br />
==================================
<br />
<?php
$B = ['One','Two','Three','Four'];
sort($B);
print_r($B);
echo "<br />";
sort($A);
print_r($A);
 ?>
 <br />
 ==================================
 <br />
 <?php
 $input= ['a','b','c','d','e'];
 $output= array_slice($input,-2,1);
 print_r($output);
 ?>
 <br />
 ==================================
 <br />
 <?php
 
 ?>
