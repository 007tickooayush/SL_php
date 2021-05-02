<?
$myFile = fopen("names.txt","w");
$txt = "John"."\n";

fwrite($myFile,$txt);

$txt = "David\n";

fclose($myFile);

// prints an extra comma

// $read = file('names.txt');
// foreach($read as $line){
//     echo $line. ',';
// }

//doesnt print an extra comma
$read = file('names.txt');
$count = count($read);
$i = 1;
foreach ($read as $line) {
    echo $line;
    if($i < $count) {
        echo ', ';
    }
    $i++;
}