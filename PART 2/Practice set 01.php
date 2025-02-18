<?php

/**
 * Calculates the total price of items in a shopping cart.
 *
 * @param array $items An array of items, each containing a 'price' key.
 * @return float The total price of all items.
 */
function calculateTotalPrice(array $items): float {
    $total = 0.0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

/**
 * Removes spaces and converts a string to lowercase.
 *
 * @param string $input The input string to modify.
 * @return string The modified string with no spaces and in lowercase.
 */
function modifyString(string $input): string {
    $string = str_replace(' ', '', $input);
    $string = strtolower($string);
    return $string;
}

/**
 * Checks if a number is even or odd.
 *
 * @param int $number The number to check.
 * @return string A message indicating whether the number is even or odd.
 */
function checkEvenOrOdd(int $number): string {
    if ($number % 2 == 0) {
        return "The number $number is even.";
    } else {
        return "The number $number is odd.";
    }
}

// Example usage
$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

$totalPrice = calculateTotalPrice($items);
echo "Total price: $" . $totalPrice . "\n";

$string = "This is a poorly written program with little structure and readability.";
$modifiedString = modifyString($string);
echo "Modified string: " . $modifiedString . "\n";

$number = 42;
$evenOrOddMessage = checkEvenOrOdd($number);
echo $evenOrOddMessage . "\n";