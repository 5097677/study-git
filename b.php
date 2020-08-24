<?php
date_default_timezone_set('Asia/Shanghai');
header("Content-type:text/html;Charset=utf-8");
echo '<pre>';
set_time_limit(0);



$start_time = strtotime('2020-07-22');
$end_time = strtotime('2021-02-03');
echo $start_time.'<br />'.$end_time;
echo '<br />';

echo date('Y-m-d H:i:s',1593532800);
echo '<br />';
echo date('Y-m-d H:i:s',1596211199);
echo '<br />';




