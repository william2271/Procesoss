<?php

define('CSV', '100Records.csv'); 
$readCsv = array_map('str_getcsv', file(CSV)); 
$csv = serialize($readCsv);
print_r($csv);
?>