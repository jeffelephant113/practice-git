<?php
//header()設定此葉面使用UTF8編碼
header('Content-Type:text/html;charset=utf-8');

function square($x){
	$x=$x*$x;
	echo '函式內的$x='.$x;
}

$x=3;

square($x);

echo'<br/>函式外的$x='.$x;

?>