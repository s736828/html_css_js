<?php

function dd($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
// string

// echo "hello ajax";

// json
$data=[
    's1'=>'amy',
    's2'=>'bob',
    's3'=>'jack',
];
echo json_encode($data);
?>