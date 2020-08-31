
<?php
$array= [1,2,3,4,5,6,7,8,9];


function binarySearchRecursive($array,$x,$left,$right){
    if($left > $right){
        return false; // cant find it
    }

    $mid = floor(($left + $right) / 2); // pick the mid point

    if($array[$mid] == $x) {
        return true; // if mid is the element, return true
    } else if( $x < $array[$mid]) {
        // if the x is in the left side of the mid, search the left side.
        return binarySearchRecursive($array,$x,$left,$mid-1); 
    } else {
        // if the x is in the right side of the mid, search the left side.
        return binarySearchRecursive($array,$x,$mid + 1, $right);
    }
}

function binarySearchIterative($array,$x){
    $left = 0;
    $right = sizeof($array) -1;

    while ($left <= $right){ //left and right are correct positions

        $mid = $left + (($right - $left) / 2); // finding mid

        if ($array[$mid] == $x){
            return true; //found it
        } else if ( $x < $array[$mid]){
            $right  = $mid -1; // right moving, left staying
        } else {
            $left = $mid + 1; // left moving, right staying
        }
    }
    return false; // haven't found it
}



