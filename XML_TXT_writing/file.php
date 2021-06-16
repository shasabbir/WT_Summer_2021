<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "jane doe\n";
fwrite($myfile, $txt);
$txt = "jane doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>