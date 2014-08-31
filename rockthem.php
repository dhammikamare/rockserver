<?php

$initdelay = $_REQUEST["initdelay"]; //5000; // 
$initcolour = $_REQUEST["initcolour"]; //"#FFFFFF"; // 
$changecolour = $_REQUEST["changecolour"]; //"#F80E31"; // 
$pattern = $_REQUEST["pattern"]; //1; // 
$stagelat = 6.8825012; // $_REQUEST["stagelat"];
$stagelong = 79.856527; // $_REQUEST["stagelong"];

$json = '{"time":' + microtime() +
        ',"initdelay":' + initdelay +
        ',"initcolour":' + initcolour +
        ',"changecolour":' + changecolour +
        ',"pattern":' + pattern +
        ',"stagelat":' + stagelat +
        ',"stagelong":' + stagelong + '}';

$myfile = fopen("initdata.json", "w") or die("Unable to open file!");
fwrite($myfile, $json);
fclose($myfile);
?>