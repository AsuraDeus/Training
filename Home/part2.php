<?php
echo chr(101),"\n";
echo "Привет\n";
$str='Привет мир';
echo "В строке \"$str\" ".strlen($str)."байт\n";

//"Транслит или замена строки на строку-масив string strtr ( string $str , array $replace_pairs ) "
$str1="машина";
$str2=[
        'м'=>'m',
        'а'=>'a',
        'ш'=>'sh',
        'и'=>'i',
        'н'=>'n'
];

echo strtr($str1, $str2);
