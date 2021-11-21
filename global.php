$GLOBALS['x'] = 1; // OK
$GLOBALS['x']++; // OK
isset($GLOBALS['x']); // OK
unset($GLOBALS['x']); // OK

$x =& $GLOBALS; // Error
$GLOBALS = ['foo' => 1, 'bar' => 2]; // Error
