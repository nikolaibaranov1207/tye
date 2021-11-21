<?php

array_is_list(["a", "b", "c"]); // true
array_is_list(["a" => "a", "b" => "b", "c" => "c"]); // false


array_is_list([1 => "a", 2 => "b", 3 => "c"]); // false
array_is_list([1 => 'a', 0 => 'b']); // false
array_is_list([0 => 'a', 2 => 'b']); // false
