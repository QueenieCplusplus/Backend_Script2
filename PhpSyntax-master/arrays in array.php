//arrays in array

<table>
<tr><th>Food</th><th>Cost</th></tr>
<?php

$kk = [
    ['Late','M', 120],
    ['Pancake', 'Standard', 65],
    ['Noodle', 'with Egg', 50],
    ['Rice', 'meanced Pork', 95],
    ['Toast', 'jam', 15],
    ['Ice Cream', 'Yimei', 30]
];

$total = 0;
$food_totals = array();

foreach($kk as $foodInfo) {
    //update total amount
    $total += $foodInfo[2]; //? why index is 2?

    //onec facing unknown name of food, then initial its amount as 0.
    if(! array_key_exists($foodInfo[1], $food_totals)){ 
        $food_totals[$foodInfo[1]] = null; // ? why index is 1?
    }

    print "<tr><td>$foodInfo[0], $foodInfo[1]</td><td>$foodInfo[2]</td>/tr>";
}

print "</table>";