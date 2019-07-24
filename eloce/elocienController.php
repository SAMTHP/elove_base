<?php

require 'connec_database.php';

function addElocien($bdd_access,$firstname,$lastname,$birth,$begin,$end,$email,$formation){
    $sql = 'INSERT INTO elocien(elocien_firstname,elocien_lastname,elocien_birth,elocien_date_begin,elocien_date_end,elocien_email,formation_id) VALUES(:elocien_firstname,:elocien_lastname,:elocien_birth,:elocien_date_begin,:elocien_date_end,:elocien_email,:formation_id)';
    $req = $bdd_access->prepare($sql);
    $req->execute(array(':elocien_firstname' => $firstname,':elocien_lastname' => $lastname,':elocien_birth' => $birth,':elocien_date_begin' => $begin,':elocien_date_end' => $end,':elocien_email' => $email,':formation_id' => $formation)) or die(print_r($req->errorInfo()));
    $req->closeCursor();
    header('Location: admin_elocien.php');
}

function showElocien($bdd_access){
    $sql = 'SELECT * FROM elocien';
    $req = $bdd_access->prepare($sql);
    $req->execute() or die(print_r($req->errorInfo()));
    $tabUser = [];
    $i = 0;
    while($user = $req->fetch()){
        $tabUser[$i++] = ["elocien_id" => $user['elocien_id'],"elocien_firstname" => $user['elocien_firstname'],"elocien_lastname" => $user['elocien_lastname'],"elocien_birth" => $user['elocien_birth'],"elocien_date_begin" => $user['elocien_date_begin'],"elocien_date_end" => $user['elocien_date_end'],"elocien_email" => $user["elocien_email"], "formation_id" => $user["formation_id"]];
    }
    return $tabUser;
}

function getFormations($bdd_access){
    $sql = "SELECT * FROM formation";
    $req = $bdd_access->prepare($sql);
    $req->execute() or die(print_r($req->errorInfo()));
    $tabUser = [];
    $i = 0;
    $tabFormations = [];
    $i = 0;
    while($formation = $req->fetch()){
        $tabFormations[$i++] = ["formation_id" => $formation['formation_id'], "formation_name" => $formation['formation_name']];
    }
    return $tabFormations;
}

function editElocien($bdd_access,$firstname,$lastname,$birth,$begin,$end,$email,$formation,$elocien_id){
    $sql = "UPDATE elocien SET elocien_firstname = :elocien_firstname, elocien_lastname = :elocien_lastname, elocien_birth = :elocien_birth, elocien_date_begin = :elocien_date_begin, elocien_date_end = :elocien_date_end, elocien_email = :elocien_email, formation_id = :formation_id WHERE elocien.elocien_id ='".$elocien_id."'";
    $req = $bdd_access->prepare($sql);
    $req->execute(array(':elocien_firstname' => $firstname,':elocien_lastname' => $lastname,':elocien_birth' => $birth,':elocien_date_begin' => $begin,':elocien_date_end' => $end,':elocien_email' => $email, ':formation_id' => $formation)) or die(print_r($req->errorInfo()));
    $req->closeCursor();
    header('Location: admin_elocien.php');
}