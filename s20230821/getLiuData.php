<?php
function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: Origin, Methods, Content-Type");
$data = $_GET;
$data['sum'] = ($data['num1'] + $data['num2']) * $data['num3'];

// $data = [
//     's1' => 'dog',
//     's2' => 'cat',
//     's3' => 'abc'
// ];
// dd($data);

echo json_encode($data);
