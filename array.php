<?php
    $colors = array('red', 'green', 'blue');
    // array_push($colors,'orange');
    // array_unshift($colors, 'purple');
    // array_pop($colors);
    // array_shift($colors);
    unset($colors[1]);
    foreach($colors as $color){
        echo $color . "<br>";
    }
?>