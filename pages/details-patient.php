<?php
include_once('../partials/header.php');


require_once('../utils/database_connect.php');

$request = $database->query("SELECT * FROM `patients` WHERE id=" . $_POST["id"]);

$patient = $request->fetch();

?>

<main class="container-md">
    <div class="d-flex justify-content-center mb-5">
        <h2>Détails patient</h2>
    </div>


    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">Phone</th>
                <th scope="col">Mail</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?php echo $patient["id"] ?></th>
                <td><?php echo $patient["firstname"] ?></td>
                <td><?php echo $patient["lastname"] ?></td>
                <td><?php echo $patient["birthdate"] ?></td>
                <td><?php echo $patient["phone"] ?></td>
                <td><?php echo $patient["mail"] ?></td>
                <td>
                    <form action="./modifier-patient.php" method="post">
                        <input type="hidden" name="id" value=<?php echo $patient["id"] ?>>
                        <button type="submit">Modifier</button>
                    </form>
                    <form action="../process/process-supprimer-patient.php" method="post">
                        <input type="hidden" name="id" value=<?php echo $patient["id"] ?>>
                        <button type="submit">Supprimer</button>
                    </form>

                </td>
            </tr>




        </tbody>
    </table>



</main>


<?php
include_once('../partials/footer.php');
?>