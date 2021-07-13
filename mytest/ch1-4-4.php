<table>
<tr>
<?php
//1:紅色、2:藍色、3:黃色
$i=1;
$j=1;
//$a=array(1=>1,1,2,2,2,1,3,2,3,3,3,1);
while($j<=20){

	$a[$j]=rand(1,3);
	$j=$j+1;

}

while($i<=20){	
	if($a[$i]==1)
	echo"<td bgcolor=#FF0000>&nbsp&nbsp&nbsp</td>";	
	if($a[$i]==2)
	echo"<td bgcolor=#0033FF>&nbsp&nbsp&nbsp</td>";
	if($a[$i]==3)
	echo"<td bgcolor=#FFFF00>&nbsp&nbsp&nbsp</td>";
	
	//echo"a[$i]=";
	
	//echo"$a[$i]";
	
	//echo"<br>";
	
	$i=$i+1;
}	
	//echo"<br>";
	
	//echo"After Shift";
	
	//echo"<br>";
	
?>
</tr>
</table>