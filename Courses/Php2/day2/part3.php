<?php
$link = mysqli_connect('localhost','asuradeus','','web2');
$sql = 'select * from courses';
$result= mysqli_query($link,$sql);

$countrows= mysqli_num_rows($result);
$countfields= mysqli_num_fields($result);

mysqli_close($link);

echo "Rows: $countrows\n";
echo "Fields: $countfields\n";