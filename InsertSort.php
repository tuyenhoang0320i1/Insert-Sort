<?php
$myArray = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];

function insertSort($array)
{
    $count = count($array);
    for ($i = 0; $i < $count; $i++) {
        $value = $array[$i];
        $j = $i - 1;
        while ($j >= 0 && $array[$j] > $value)
        {
            $array[$j + 1] = $array[$j];
            $j--;
        }
        $array[$j + 1] = $value;
    }
    return $array;
}

echo "Before Sorting: ";
echo "<pre>";
print_r($myArray);
echo "</pre>";

echo "After Sorting: ";
echo "<pre>";
print_r(insertSort($myArray));
echo "</pre>";