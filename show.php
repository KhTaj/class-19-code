<?php
include_once './vendor/autoload.php';
use Project\Controllers\Student;
$student = new Student();
$studentInfo = $student->details($_GET['id']);
print_r($studentInfo);

?>

<h1>Detail Info</h1>
<p>Student Id: <?= $studentInfo['id'] ?></p>
<p>Name: <?= $studentInfo['name'] ?></p>