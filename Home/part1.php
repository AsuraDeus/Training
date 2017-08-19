<?php
function silly(){
    return [1,2,3];
}
$arr = silly();
var_dump($arr);
list($a,$b,$c) = silly();
echo "<br />";
var_dump(silly());
echo "<br />";
echo silly()[0];
echo "<br />";
echo "<br />";
  echo mt_rand(1,10);
echo '=================';
echo "<br />";
function father($a){
    echo $a,"<br />";
    function child($b){
        echo $b+1,"<br />";
        return $b * $b;
    }
    return $a*$a*child($a);
}

echo date(DATE_COOKIE);

echo '<br />';
$date = new DateTime(DATE_ATOM);
$date->add(new DateInterval('P10D'));
echo $date->format('Y-m-d') . "\n";
father(10);
child(30);
