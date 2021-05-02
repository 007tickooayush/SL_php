<?php
$myfile = "text.txt";
$fh = fopen($myfile,'a');
fwrite($fh,"Some text");
fclose($fh);
