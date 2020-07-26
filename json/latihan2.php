<?php
    $data = file_get_contents('coba.json');
    $student = json_decode($data, true);
    var_dump($student);
    echo $student[0]["teacher"]["teacher1"];
?>