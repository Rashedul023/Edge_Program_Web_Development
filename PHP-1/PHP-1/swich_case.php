<?php

$day =  date("l");
echo "Today is".date("l");

switch ($day){
    case "Monday":
        echo "Start of the week! ";
        break;


    case "Tuesday":
        echo "Start of the week. Tuesday! ";
        break;


    case "Wednesday":
        echo "Start of the week! wednesday ";
        break;


    case "Thursday":
        echo " Today is Thursday ";
        break;


    case "Friday":
        echo "This is the weekend! Friday ";
        break;


    case "Saturday":
        echo "Enjoy! Saturday";
        break;


    case "Sunday":
        echo "End of the ! Sunday";
        break;

    default:
        echo "Invalid!! something went wrong!";

    }


?>

/*
Common variations with date()

"D": Short day name (e.g. "Wed").
"F": Full month name
"Y": Yeat in four digit
*/