<?php

header('Cache-Control: no-cache,max-age=0');
header('Cache-Control: no store');
header('Cache-Control: max-age=3600');
//кэш на +1 от серверного времени
header('Expires: ' .date('r',time()+3600));
?>