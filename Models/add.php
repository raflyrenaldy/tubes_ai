<?php

$from = $_POST['from'];
    $to = $_POST['to'];
    $table = fopen('adult.csv','r');
    $tes = fopen('tes.csv','w');
    $tes1 = fopen('tes1.csv','w');
    $tes2 = fopen('tes2.csv','w');
    $row = 1;
    while (($data = fgetcsv($table, 1000)) !== FALSE){
        $row++;
        $tes123 = array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8],$data[9],$data[10],$data[11],$data[12],$data[13]);
    if($row >= $from && $row < $to){
        fputcsv($tes,$data);
        fputcsv($tes1,$data);
        fputcsv($tes2,$tes123);
    }
}
    fclose($table);
fclose($tes);
fclose($tes1);
fclose($tes3);
header('location:../data2.php');
?>