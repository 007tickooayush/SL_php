<?php
function multiply($num1, $num2) {
    echo $num1 * $num2;
}
multiply(3, 6);

function setCounter($num=10) {
    echo "Counter is ".$num."<br />";
}
setCounter(42);  //Counter is 42
setCounter();  //Counter is 10
