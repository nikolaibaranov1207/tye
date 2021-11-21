$array = ["a" => 1];

$array2 = ["b" => 2];

$arrayMerge = ["a" => 0, ...$array, ...$array2];  // ["a" => 1, "b" => 2]
