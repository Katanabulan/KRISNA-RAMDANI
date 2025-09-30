<html>
<head>    
<title>IF MAJEMUK</title>
</head>
<body>
<?php
$nilai =90;
if(($nilai>=0)&&($nilai<50))
{$grade="E";}
elseif(($nilai>=0)&&($nilai<60))
{$grade="D";}
else if(($nilai>=0)&&($nilai<75))
{$grade="C";}
elseif(($nilai>=0)&&($nilai<85))
{$grade="B";}
elseif(($nilai>=0)&&($nilai<100))
{$grade="A";}
else
{$grade ="nilai anda di luar nalar";}
echo "nilai Anda : $nilai,dikonversi menjadi $grade";
?>
</body>
</html>