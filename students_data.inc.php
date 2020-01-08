<?php 
    $studentData = file_get_contents("./student_data.txt");
    $decodedStudentData = json_decode($studentData);

    $matricNumber = $decodedStudentData->matricNumber;
    $password = $decodedStudentData->password;
    $name = $decodedStudentData->name;
?>