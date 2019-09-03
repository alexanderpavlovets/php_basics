<?php


function provideAccounts() {
    $arr = [1, 2, 33];
    foreach ($arr as $userData) {
        yield $userData;
    }
}

$accountsGenerator = provideAccounts();

foreach ($accountsGenerator as $userData) {
  echo "$userData <br>";
}

$suffix = '123123';
$asd = sprintf('%s%s-%s', 'O', 444, $suffix);

echo $asd;

