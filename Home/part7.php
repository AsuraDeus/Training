<?php

 echo microtime(true);

 $jd = GregorianToJD(10, 11, 1970);
 echo "$jd\n";
 $gregorian = JDToGregorian($jd);
 echo "$gregorian\n";
