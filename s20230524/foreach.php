<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach</title>
</head>

<body>
    <?php
    $myArr = ['amy', 'bob', 'cat'];
    foreach ($myArr as $key => $value) {
        # code...
        echo "$key";
        echo "$value";
    }
    ?>
    <!--
    php的foreach的key值在前面value為後面 
    但javascript的foreach的value值是在前面，key值在後面
    -->
    <script>
        let myArr = ['amy', 'bob', 'cat'];
        myArr.forEach(function(value, key) {
            console.log('key', key);
            console.log('value', value);
        });
    </script>
</body>

</html>
<?php
