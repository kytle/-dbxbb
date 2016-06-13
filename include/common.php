<?php

if (count(get_included_files()) == 1) die();

foreach ($_GET as $k => $v) {
    if (preg_match('/^[a-zA-Z0-9\-\_\.%]*$/', $v) !== 1) die('Nice try');
}

//error_reporting(0);
error_reporting(E_ALL);

$mysqli = new mysqli('localhost', 'root', 'sjtudns', 'dns');
if (!$mysqli) {
    die();
}
$mysqli->set_charset('utf8');

function mysqli_get_val($sql) {
    global $mysqli;
    $result = $mysqli->query($sql);
    if ($result && $result->num_rows > 0) {
    }
    return "";
}
?>
