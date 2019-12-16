//sort

<?php
$census = ['NY' => 70000,
    'CA' => 100000,
    'PA' => 80000,
    'TX' => 60000];

    asort($census); //ksort($census); 

print "<table>\n";
print "<tr><th>City</th><th>TicketCharge</th></tr>\n";
$amount = 0;
foreach ($census as $city => $charge) {
    $amount += $charge;
    print "<tr><td>$city</td><td>$charge</td></tr>\n";
}

print "<tr><td>Total</td><td>$amount</td></tr>\n";
print"</table>";