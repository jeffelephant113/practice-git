<?php
function sum($num1,$num2){ //設定sum1、sum2參數
//將$sum1與$sum2兩個變數，相加後回傳
$a=$num1+$num2;
return $a;
}
function minus($num1,$num2){ //設定sum1、sum2參數
//將$sum1與$sum2兩個變數，相減後回傳
return $num1-$num2;
}
function man($num1,$num2){ //設定sum1、sum2參數
//將$sum1與$sum2兩個變數，相乘後回傳
return $num1*$num2;
}
function div($num1,$num2){ //設定sum1、sum2參數
//將$sum1與$sum2兩個變數，相除後回傳
return $num1/$num2;
}
//執行"(3,6)"呼叫sum程式時，3會被指定給$sum1變數
//6則會被指定給$sum2變數
echo'相加:'.sum(3,6).'<br>';
echo'相減:'.minus(3,6).'<br>';
echo'相乘:'.man(3,6).'<br>';
echo'相除:'.div(3,6).'<br>';
?>