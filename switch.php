<?php
$today = 'Tue';

switch ($today) {
    case "Mon":
        echo "Today is Monday.";
        break;
    case "Tue":
        echo "Today is Tuesday.";
        break;
    case "Wed":
        echo "Today is Wednesday.";
        break;
    case "Thu":
        echo "Today is Thursday.";
        break;
    case "Fri":
        echo "Today is Friday.";
        break;
    case "Sat":
        echo "Today is Saturday.";
        break;
    case "Sun":
        echo "Today is Sunday.";
        break;
    default:
        echo "Invalid day.";
}

$day = 'Wed';

switch ($day) {
    case 'Mon':
        echo 'First day of the week';
        break;
    case 'Tue':
    case 'Wed':
    case 'Thu':
        echo 'Working day';
        break;
    case 'Fri':
        echo 'Friday!';
        break;
    default:
        echo 'Weekend!';
}