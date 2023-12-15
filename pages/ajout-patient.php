<?php
include_once('../partials/header.php');
?>

<main class="container-md">
    <div class="d-flex justify-content-center mb-5">
        <h2>Ajout patient</h2>
    </div>

    <section class="d-flex justify-content-center">
        <div class="card" style="width: 50%;">
            <div class="card-body">
                <form action="../process/process-ajout-patient.php" method="post">
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="lastname" name="lastname">

                    </div>
                    <div class="mb-3">
                        <label for="firstname" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="firstname" name="firstname">
                    </div>
                    <div class="mb-3">
                        <label for="birthdate" class="form-label">Date de naissance</label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate">

                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Numéro de Téléphone</label>
                        <input type="tel" class="form-control" id="phone" name="phone"  pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}">
                    </div>
                    <div class="mb-3">
                        <label for="mail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="mail" name="mail">
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Ajouter patient</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </section>

</main>


<?php
include_once('../partials/footer.php');
?>