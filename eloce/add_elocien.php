<?php

require 'elocienController.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$birth = $_POST['birth'];
$begin = $_POST['date_begin'];
$end = $_POST['date_end'];
$email = $_POST['email'];
$formation = $_POST['formation'];

addElocien($connect,$firstname,$lastname,$birth,$begin,$end,$email,$formation);