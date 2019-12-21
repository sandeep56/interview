<?php
$x = 2351234;
function isStrong($x){
$temp = $x;
$new = 0;
while ($temp!=0)
{
$new = $new*10+$temp%10;
$temp = (int)($temp/10);
}
$new;
while($temp)
{
	$d = $temp %10;
	$new = $new * 10 + $d;
	$temp =$temp/10;
	
}
}
echo isStrong($x);
?>
