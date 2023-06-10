<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawa php</title>
</head>
<body>
    <?php
    $name = "belal";
    $fruite= "apple";
    echo '<h1> My name is '.$name. '</h1>';
    echo "<p>  I ate 10 {$fruite}s </p>";
    $skills = array('PHp','html','css');
    ?>
    <ul>
        <?php foreach($skills as $skill) : ?>
            <li><?= $skill ?></li>
            <?php  endforeach ?>
    </ul>
    <!--/*************************************************************************************************  -->

    <?php
        class Person {
            public $country;

        } 
        $person = new Person();

        $person->country = "Palestine";

        var_dump($person) ;

    ?>
</body>

</html>