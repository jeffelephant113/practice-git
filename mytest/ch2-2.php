<?php
header("content-type:text/html;charset=utf-8");

if(@$num=file_put_contents("Ch02-2.txt","台灣國家公園\n",FILE_APPEND)){
	echo "共寫入 $num 個位元組";
}
else{
	echo"無法輸入 案!";
}

if(file_get_contents("Ch02-2.txt")){
	echo '以下是Ch02-2.txt的內容:<hr/>';
	echo file_get_contents("Ch02-2.txt");
}
else{
	echo"讀取失敗";
}
	
?>