<?php
$myvar = 5 == 4;
if($myvar){
    echo 'my condition is true in if statement';
}

echo '<br>---------------------<br>';

$myvar = 7 == 5;
if($myvar){
    echo 'my condition is true';
}else{
    echo 'now iam in else statement';

}

echo '<br>---------------------<br>';
$x=4343;
if($x == 4){
    echo 'the number is four';
}elseif($x == 1){
    echo 'the number is one';
}else{
    echo 'the number is not 4    and 1';
}

?>