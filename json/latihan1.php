<?php
    // $student = [
    //     "name"=> "Decki Herdiawan Soepandi",
    //     "nrp"=> "160323012",
    //     "email"=> "160323012@fellow.lpkia.ac.id"
    // ];

    $dbapi = new PDO('mysql:host=localhost;dbname=mvc', 'root', '');
    $db = $dbapi->prepare('SELECT * FROM students');
    $db->execute();
    $students = $db->fetchAll(PDO::FETCH_ASSOC);

    $data = json_encode($students);
    echo $data;
?>