<?
if( ! mysql_connect("localhost","root","jeffLin0113"))
	die("無法連線資料庫伺服器，請聯繫系統管理員");
mysql_query("SET NAMES utf8");

if( ! mysql_select_db('message'))
	die("無法使用資料庫");
?>