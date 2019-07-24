<?php

require_once "elocienController.php";

$firstname = $_POST['firstname_edit'];
$lastname = $_POST['lastname_edit'];
$birth = $_POST['date_birth_edit'];
$begin = $_POST['date_begin_edit'];
$end = $_POST['date_end_edit'];
$email = $_POST['email_edit'];
$formation = $_POST['formation_edit'];
$elocien_id = $_POST['elocien_id'];

editElocien($connect,$firstname,$lastname,$birth,$begin,$end,$email,$formation,$elocien_id);