<html>
<head>
    <title>Tema</title>
</head>
<body>
<?php
function nearest_prime($num)
{
    $up = NULL;
    $down = NULL;
    $counter = 1;
    while ($up === NULL && $down === NULL) {
        $going_up = $num + $counter;
        $prime_up = TRUE;
        for ($k = 2; $k < $going_up; $k++) {
            if (($going_up % $k) === 0) {
                $prime_up = FALSE;
            }
        }
        if ($prime_up === TRUE) {
            $up = $going_up;
        }
        $going_down = $num - $counter;
        $prime_down = TRUE;
        for ($k = 2; $k < $going_down; $k++) {
            if (($going_down % $k) === 0) {
                $prime_down = FALSE;
            }
        }
        if ($prime_down === TRUE) {
            $down = $going_down;
        }
        $counter++;
    }
    $return = array();
    if (!is_null($up)) {
        $return[] = $up;
    }
    if (!is_null($down)) {
        $return[] = $down;
    }
    return implode(',', $return);
}

echo("Cel mai apropiat numar prim:  ");
echo(nearest_prime(22));
echo("         ");
function reverse($n)
{
    $rev = 0;
    while ($n != 0) {
        $rev = ($rev * 10) + ($n % 10);
        $n = floor($n / 10);
    }
    return $rev;
}

function getNumberFromOddDigits($n)
{
    $stringNumber = "";
    $n = reverse($n);
    $c = 1;
    while ($n != 0) {
        if ($c % 2 == 1)
            $stringNumber = $stringNumber . (string)$c;
        $n = floor($n / 10);
        $c++;
    }
    echo "Numarul format din cifre impare = ", $stringNumber, "\n";
}

$n = 1234;
getNumberFromOddDigits($n);
$a = 21348;
$b = 14513;
$a = str_split($a);
$b = str_split($b);
$matching = array_intersect($a, $b);
echo("Numerele: ");
Var_dump($matching);
echo("Contor: ");
echo count($matching);
?>
</body>
</html>