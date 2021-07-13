<?php

if(@$contents=file_get_contents("Ch02-1.txt")){
	echo '以下是Ch02-1.txt的內容:<hr/>'.$contents;
}
else{
	echo'讀取失敗';
}
?>