<?php
$num = [1,2,3,4,5];
$numlen=count($num);
for($i=0;$i<$numlen;$i++)
{
echo "array elemnts $i is:".$num[$i]."<br>";
}
for($i=0;$i<$numlen;$i++)
{
if($num[$i]%5==0)
{
echo "<br> the array numbers divisible by 5 is =".$num[$i]."<br>";
}
}
?>