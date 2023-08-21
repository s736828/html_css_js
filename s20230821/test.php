<?php
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods: *");
// header("Access-Control-Allow-Headers: Origin, Methods, Content-Type");

 $data=['name'=>'bob',
        'age'=>30];

echo json_encode($data);
