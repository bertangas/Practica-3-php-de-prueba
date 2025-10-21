<?php

function recupera() {
    $min = 1; 
    $max = 10;
    
   
    if (isset($_POST['num_min']) && isset($_POST['num_max'])) {
 
        $min = intval($_POST['num_min']);
        $max = intval($_POST['num_max']);
    }
    
 
    return [$min, $max]; 
}

?>
