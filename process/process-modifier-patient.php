<?php

if (
    isset($_POST["id"]) && !empty($_POST["id"]) &&
    isset($_POST["lastname"]) && !empty($_POST["lastname"]) &&
    isset($_POST["firstname"]) && !empty($_POST["firstname"]) &&
    isset($_POST["birthdate"]) && !empty($_POST["birthdate"]) &&
    isset($_POST["phone"]) && !empty($_POST["phone"]) &&
    isset($_POST["mail"]) && !empty($_POST["mail"])

) {
    require_once('../utils/database_connect.php');
    
    $request = $database->prepare("UPDATE patients SET lastname = :lastname, firstname = :firstname, birthdate = :birthdate, phone = :phone, mail = :mail
    WHERE patients.id = :id");
    $request->execute([
        'lastname' => $_POST["lastname"],
        'firstname' => $_POST["firstname"],
        'birthdate' => $_POST["birthdate"],
        'phone' => $_POST["phone"],
        'mail' => $_POST["mail"],
        'id' => $_POST["id"]
    ]);
}


header('Location: ../pages/liste-patient.php');
