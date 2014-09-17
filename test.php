<?php
function test()

{
    static $var1=1;
    $var1+=2;
    echo $var1.' ';
}
test();
test();
test();
?>



