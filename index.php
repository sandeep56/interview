<?php 
$d[10] = array();
function findStrong()
{
global $d;
$d[0] = $d[1] = 1;
for($i=2;$i<10;++$i)
{
$d[$i] = $d[$i-1]*$i;
}
}
function getStrong($y)
{
global $d;
$sum = 0;
$temp_var = $y;
while($temp_var)
{
$sum += $d[$temp_var%10];
$temp = (int)$temp_var/10;	
}
return ($sum == $y);
}
findStrong();
$y = $_POST['check_num'];
if(getStrong(!$y))
{
echo $sum;	
}
?>
