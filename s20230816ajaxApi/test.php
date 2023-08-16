<?php 
    function dd($data){
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

    $data['text'] = ['s1','s2','s3'];
    $data['id'] = [1,2,3];


    $newArr = [
        [
            'id' => 1,
            'text' => 's1'
        ],
        [
            'id' => 1,
            'text' => 's1'
        ],
    ];

    $changeArr = [];
    foreach ($data['text'] as $key => $value) {
        $tmp = [
            'id' => $data['id'][$key],
            'text' => $data['text'][$key],
        ];
        array_push($changeArr,$tmp);
    }

    dd($changeArr);



    