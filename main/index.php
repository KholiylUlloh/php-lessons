<?php

function Addition($a, $b)
{
    return $a + $b;
}

//echo Addition(2, 4);

function Substraction($a, $b)
{
    return $a - $b;
}

//echo Substraction(3, 7);

function Multiplication($a, $b)
{
    return $a * $b;
}

//echo Multiplication(3, 5);

function Division($a, $b)
{
    return $a / $b;
}

//echo Division(5, 4);

function calc($a, $b, $type = '')
{
    switch ($type) {
        case 'add':
            return $a + $b;
            break;
        case 'substract':
            return $a - $b;
            break;
        case 'multiply':
            return $a * $b;
            break;
        case 'divide':
            return $a / $b;
        default:
            echo "Please select an operation type";
    }
}

//echo calc(2, 5);
function sum($a, $b)
{
    return $a + $b;
}

function cal($a, $b, $operation)
{
    if (!function_exists($operation)) {
        return "Something went wrong";
    }
    return $operation($a, $b);
}

//echo cal(3, 5, 'sum');

$users = [
    'name' => 'Adam',
    'age' => 23,
    'status' => 'admin',
    'isActive' => true,
    'arr' => [
        'apple', 'banana', 'kiwi'
    ]
];

//foreach ($users as $key => $user){
//    echo <<<user
//    <h1>{$key} $user</h1>
//user;
//
//}

//$str = "apple banana kiwi";
//
//$arr = explode(' ,', $str);
//
//foreach ($arr as $item){
//    echo $item;
//}


function sortArray($array, $option, $order = SORT_ASC): array
{
    $newArr = [];
    $sortableArr = [];

    if (count($array) > 0) {
        foreach ($array as $key => $val) {
            if (is_array($val)) {
                foreach ($val as $vKey => $val2) {
                    if ($vKey == $option) {
                        $sortableArr[$key] = $val2;
                    }
                }
            } else {
                $sortableArr[$key] = $val;
            }
        }
        switch ($order) {
            case SORT_ASC:
                asort($sortableArr);
                break;
            case SORT_DESC:
                arsort($sortableArr);
                break;
        }
        foreach ($sortableArr as $k => $v) {
            $newArr[$k] = $array[$k];
        }
    }
    return $newArr;
}

//function array_sort($array, $on, $order=SORT_ASC)
//{
//    $new_array = [];
//    $sortable_array = [];
//
//    if (sizeof($array) > 0) {
//        foreach ($array as $k => $v) {
//            if (is_array($v)) {
//                foreach ($v as $k2 => $v2) {
//                    if ($k2 == $on) {
//                        $sortable_array[$k] = $v2;
//                    }
//                }
//            } else {
//                $sortable_array[$k] = $v;
//            }
//        }
//
//        switch ($order) {
//            case SORT_ASC:
//                asort($sortable_array);
//                break;
//            case SORT_DESC:
//                arsort($sortable_array);
//                break;
//        }
//
//        foreach ($sortable_array as $k => $v) {
//            $new_array[$k] = $array[$k];
//        }
//    }
//
//    return $new_array;
//}

$people = array(
    12345 => array(
        'id' => 12345,
        'first_name' => 'Joe',
        'surname' => 'Blogs',
        'age' => 23,
        'sex' => 'm'
    ),
    12346 => array(
        'id' => 12346,
        'first_name' => 'Adam',
        'surname' => 'Smith',
        'age' => 18,
        'sex' => 'm'
    ),
    12347 => array(
        'id' => 12347,
        'first_name' => 'Amy',
        'surname' => 'Jones',
        'age' => 21,
        'sex' => 'f'
    )
);

//echo sortArray($people, 'age');

//print_r(array_sort($people, 'age', SORT_ASC));
//$sortedArr = sortArray($people, 'age', SORT_ASC);
//
//foreach ($sortedArr as $items){
//    foreach ($items as $itemKey => $item){
//        echo  '<h1>' .$itemKey,  $item . '<br>' . '</h1>';
//    }
//}
$i = 0;

//for ($i < 100; $i++;){
//    if ($i % 3 == 0){
//        echo $i . '<br>';
//    }
//}


// while($i<100){
//    $i++;
//     if ($i % 3 == 0){
//         echo $i . '<br>';
//     }
// }

//while ($i < 10) {
//    if ($i == 0) {
//        echo '<span>' . $i . '</span>' . '-' . '<span>This is null</span>' . '<br>';
//    } elseif ($i % 2 == 0) {
//        echo '<span>' . $i . '</span>' . '-' . '<span>This is even number</span>' . '<br>';
//    } else {
//        echo '<span>' . $i . '</span>' . '-' . '<span>This is odd number</span>' . '<br>';
//    }
//    $i++;
//}

$regions = [
    'Andijon Viloyati' => [
        "Andijon",
        "Asaka",
        "Baliqchi",
        "Paxtaobod",
        "Xo'jaobod"
    ],
    'Toshkent Viloyati' => [
        "Yunusobod",
        "Chilonzor",
        "Toshkent",
        "Eski Shahar",
        "Mirobod"
    ]
];

//foreach ($regions as $key => $region) {
//    echo "$key:" . '<br>';
//    echo implode(',  ', $region) . '<br>';
//}
//
//
//$str = "apple banana";
//
//echo str_replace(' ', '', $str);
//
//for ($i = 0; $i < 10; $i++) echo $i;

//include '../new/test.php';

/*'<h1><?$Hello ?></h1>';*/   // it doesnt work with descendant files

include dirname(__DIR__) . '/new/test.php';  // even there is an error it doesnt affect to your code
//require dirname(__DIR__) . '/new/test.php';  // it affects and never shows your codes in browser

