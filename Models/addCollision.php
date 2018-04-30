<?php

$newCsvData = array();
if (($handle = fopen("tes2.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        if($data[8] == 'White'){
            $data[] = '>50K';
        }else{
            $data[] = '<50K';
        }
        
        $newCsvData[] = $data;
    }
    fclose($handle);
}

$handle = fopen('tes2.csv', 'w');

foreach ($newCsvData as $line) {
   fputcsv($handle, $line);
}

fclose($handle);
header('location:../data4.php');
?> 