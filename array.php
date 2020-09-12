<?php 
// $sajalHossain=[
//     'firstName'=>'sajal',
//     "age"=>"25",
// ];

$data=[];

$data[0][0]=1;
$data[0][1]="a";
$data[0][2]="01";

$data[1][0]=2;
$data[1][1]="b";
$data[1][2]="02";

$data[2][0]=3;
$data[2][1]="c";
$data[2][2]="03";

foreach($data as $value){
    echo $value[0].$value[1].$value[2].'<br/>';
}


?>
