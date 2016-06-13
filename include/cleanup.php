<?php

if (count(get_included_files()) == 1) die();

if ($mysqli) {
    $mysqli->close();
}


