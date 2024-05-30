<?php
$conditates = [
    ['name' => 'josep', 'age' => 30],
    ['name' => 'sarah', 'age' => 23],
    ['name' => 'amar', 'age' => 19],
    ['name' => 'kalid', 'age' => 22],
    ['name' => 'rana', 'age' => 54],
    ['name' => 'mark', 'age' => 21],
    ['name' => 'lalia', 'age' => 26],
    ['name' => 'subma', 'age' => 23],
    ['name' => 'kamran', 'age' => 29],
    ['name' => 'lorla', 'age' => 12],
    ['name' => 'naster', 'age' => 35],
];

$numbrs = count($conditates);
echo "The number of candidates is $numbrs.\n";

$eligibleConditate = 0;
$notEligibleCondiate = 0;

foreach ($conditates as $person) {
    // Ensure the 'age' key is an integer for comparison
    $age = (int)$person['age'];

    if ($age >= 22 && $age <= 30) {
        $eligibleConditate++;
    } else {
        $notEligibleCondiate++;
    }
}

echo "The number of eligible candidates is $eligibleConditate and the number of non-eligible candidates is $notEligibleCondiate.";
?>
