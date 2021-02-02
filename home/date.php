<?php
	$startdate=date("Y-m-d H:i:s");
	$enddate="2021-2-1 00:00:00";
	$stdate=strtotime($startdate);
	$endate=strtotime($enddate);
	$day=floor(($stdate/86400)-($endate/86400));
	$hour=floor((($stdate/86400)-($endate/86400)-$day)*24);
	$minute=floor((((($stdate/86400)-($endate/86400)-$day)*24)-$hour)*60);
	$seconds=floor((((((($stdate/86400)-($endate/86400)-$day)*24)-$hour)*60)-$minute)*60);
	echo "<i class=\"mdui-icon material-icons\">access_alarms</i>已运行&nbsp;&nbsp;".$day."D&nbsp;&nbsp;".$hour."H&nbsp;&nbsp;".$minute."M&nbsp;&nbsp;".$seconds."S";
?>