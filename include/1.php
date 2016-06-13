<?php

if (count(get_included_files()) == 1) die();

foreach ($_GET as $k => $v) {
    if (preg_match('/^[a-zA-Z0-9\-\_\.%]*$/', $v) !== 1) die('Nice try');
}

//error_reporting(0);
error_reporting(E_ALL);

$mysqli = new mysqli('localhost', 'root', '13917331612', 'dns');
if (!$mysqli) {
    die();
}
$mysqli->set_charset('utf8');

}
