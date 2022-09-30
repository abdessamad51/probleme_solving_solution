<?php


function repeate_string($str, $nbr_repeat = 1): string
{
    $txt = "";
    if ($str != null  && gettype($nbr_repeat) == 'integer') {
        for ($i = 0; $i < $nbr_repeat; $i++) {
            if ($i != $nbr_repeat - 1) {
                $txt .= $str . " ";
                continue;
            }
            $txt .= $str;
        }
    }
    return $txt;
};

##---------------------------------------------------------------

function  length_str($str)
{
    $arr = str_split($str);
    $nombre = 0;
    foreach ($arr as $s) {
        $nombre++;
    }
    return $nombre;
}


function length_string($str)
{
    $count = 0;
    while (!empty($str[$count])) {
        $count++;
    }
    return $count;
}
echo length_str('fk fdnm djkfd jdj') . '</br>';

##---------------------------------------------------------------

function string_to_array(string $str)
{
    $arr = [];
    $count = 0;
    while (!empty($str[$count])) {
        $arr[] = $str[$count];
        $count++;
    }
    return $arr;
}
echo '<pre>';
print_r(string_to_array('rami'));
echo '</pre>';

##---------------------------------------------------------------

function reverse_string(string $str)
{
    $str1 = "";
    for ($i = strlen($str); $i >= 0; $i++) {
        $str1 .= $str[$i];
    }
    return $str1;
}
echo reverse_string("wat");

##---------------------------------------------------------------

function trim_left(string $str)
{
    $res = "";
    $arr1_nbrs = range(65, 90);
    $arr2_nbrs = range(97, 122);
    $arr3_nbrs = array_merge($arr1_nbrs, $arr2_nbrs);
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array(ord($str[$i]), $arr3_nbrs))
            $res .= $str[$i];
    }
    return $res;
}
echo trim_left('@@@####3hdsjnkzzzzzwejjdj@@@');

##---------------------------------------------------------------
function  string_is_lower(string $str)
{
    $lower = true;
    $arr_numbers = range(65, 90);
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array(ord($str[$i]), $arr_numbers)) {
            $lower = false;
            break;
        }
    }
    return $lower;
}
print(lower_string('jdjdddddddddddddddddddddddeeeDEwj'));

##---------------------------------------------------------------

function convert_string(string $str)
{
    $list = [];
    $i = strlen($str);
    while ($i != 1) {
        $list[] = $str[$i];
        $i;
    }
    return $list;
}
echo '<pre>';
print_r(convert('ayoub'));
echo '</pre>';

##---------------------------------------------------------------

function remove_char($str, $char)
{

    return  implode(array_filter(str_split($str), function ($arr) use ($char) {
        return !in_array($char, [strtolower($arr), strtoupper($arr)]);
    }));
}
var_dump(remove_char("AbdeWssawwwwwwmwad", "W"));


##---------------------------------------------------------------

function long_str(string $str)
{
    return  array_reduce(explode(" ", $str), fn ($l, $c) => strlen($c) > strlen($l) ? $c : $l);
}
echo long_str("hy thier my name is abdessemed rami123456789");

##---------------------------------------------------------------

function remove_duplicate_char($str)
{
    return implode(
        array_map(function ($value) {
            return $value;
        }, array_keys(array_count_values(str_split($str))))
    );
}
echo remove_duplicate_char('aabbccddjjff');

##---------------------------------------------------------------

function findBobIndex($names)
{
    return array_search("Bob", $names) ? array_search("Bob", $names) : 'not found';
}

echo findBobIndex(["Bobo", "Jimmy", "Boab"]);

##---------------------------------------------------------------

function sort_string($str)
{
    $stringParts = str_split($str);
    sort($stringParts);
    return implode($stringParts); // abc
}

##---------------------------------------------------------------

//function use for split string two part:part one int part two float then  megre two part in variable float

function   splitString($str)
{

    $arr = explode(".", $str);
    $number = (float) $arr[0] . "." . $arr[1];
    echo "part one is $arr[0] <br> part two is $arr[1] <br> full number is $number <br> type is " . gettype($number);
}
splitString('3333.33'); 

##---------------------------------------------------------------
