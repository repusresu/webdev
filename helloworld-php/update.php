<?php

$delimiter = ",";

$fp = fopen('log.log', 'r');

while ( !feof($fp) )
{
    // $line = fgets($fp, 2048);
    // $data = str_getcsv($line, $delimiter);
    // file_put_contents('./info.log', date('d-m-Y, H:i:s').",".$data[0].",".$data[1].",".$data[2]."\n", FILE_APPEND|LOCK_EX);

    
}                              

fclose($fp);