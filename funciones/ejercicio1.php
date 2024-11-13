<?php
function esPrimo($numero) {
    if ($numero < 2) return false;
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i === 0) return false;
    }
    return true;
}
function primosHastaUnMillon() {
    $primos = [];
    for ($i = 1; $i <= 1000000; $i++) {
        if (esPrimo($i)) {
            $primos[] = $i;
        }
    }
    return $primos;
}

print_r(primosHastaUnMillon());
?>
