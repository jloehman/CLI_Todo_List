<?php

$items = array();

function list_items($list)
{
    $result ='';
    foreach($list as $key => $value)
    {
        $key++;
        echo "[{$key}] {$value}" . PHP_EOL;
    }
    return $result;
}
function get_input($upper = false) 
{
    $result = trim(fgets(STDIN));

    return $upper ? strtoupper($result) : $result;

}

do {
    echo list_items($items);
    echo '(N)ew item, (R)emove item, (Q)uit : ';

    $input = get_input(TRUE);

    if ($input == 'N'){
        echo 'Enter item: ';
        $items[] = get_input();
    } elseif ($input == 'R') {
        echo 'Enter item number to remove: ';
        $key = get_input();
        $key--;
        unset($items[$key]);
    } $items = array_values($items);
} while ($input != 'Q');

echo "Goodbye!\n";

exit(0);