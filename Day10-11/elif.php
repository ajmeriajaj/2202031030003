<?php
$a = 10;
$b = 15;
$c = 25;

if ($a < $b) {
    echo ("A is less than B");
}
elseif ($a > $b) {
    echo ("A is greater than B");
}
elseif ($b < $c) {
    echo ("B is less than C");
}
elseif ($b > $c) {
    echo ("B is greater than C");
}
elseif ($a < $c) {
    echo ("A is less than c");
}
elseif ($a > $c) {
    echo ("A is greater than c");
}
else {
    echo ("Equal");
}

?>