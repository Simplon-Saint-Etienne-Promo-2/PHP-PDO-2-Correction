<?php

if (
    isset($_POST["id"]) && !empty($_POST["id"])
) {
    require_once('../utils/database_connect.php');
    
    $request = $database->prepare("DELETE FROM patients WHERE patients.id = :id");
    $request->execute([
        'id' => $_POST["id"]
    ]);
}


header('Location: ../pages/liste-patient.php');
