<?php
include_once('../partials/header.php');


require_once('../utils/database_connect.php');

$request = $database->query("SELECT * FROM `patients` WHERE id=" . $_POST["id"]);

$patient = $request->fetch();



?>

<main class="container-md">
    <div class="d-flex justify-content-center mb-5">
        <h2>Modifier patient</h2>
    </div>

    <section class="d-flex justify-content-center">
        <div class="card" style="width: 50%;">
            <div class="card-body">
                <form action="../process/process-modifier-patient.php" method="post">
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" value=<?php echo $patient["lastname"]?>>

                    </div>
                    <div class="mb-3">
                        <label for="firstname" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" value=<?php echo $patient["firstname"]?>>
                    </div>
                    <div class="mb-3">
                        <label for="birthdate" class="form-label">Date de naissance</label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate" value=<?php echo $patient["birthdate"]?>>

                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Numéro de Téléphone</label>
                        <input type="tel" class="form-control" id="phone" name="phone"  pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" value=<?php echo $patient["phone"]?>>
                    </div>
                    <div class="mb-3">
                        <label for="mail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="mail" name="mail" value=<?php echo $patient["mail"]?>>
                    </div>

                    <input type="hidden" name="id" value=<?php echo $patient["id"] ?>>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Modifier patient</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </section>

</main>


<?php
include_once('../partials/footer.php');
?>