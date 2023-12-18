<?php
include_once('../partials/header.php');
require_once('../utils/database_connect.php');

$request = $database->query("SELECT * FROM `patients`");

$patients = $request->fetchAll();

// var_dump($patients);

?>

<main class="container-md">
    <div class="d-flex justify-content-center mb-5">
        <h2>Liste patient</h2>
    </div>


    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($patients as $patient) { ?>

                <tr>
                    <th scope="row"><?php echo $patient["id"] ?></th>
                    <td><?php echo $patient["firstname"] ?></td>
                    <td><?php echo $patient["lastname"] ?></td>
                    <!-- <td><a href="./details-patient.php?id=<?php //echo $patient["id"] ?>">Voir détail</a></td> -->
                    <td>
                        <form action="./details-patient.php" method="post">
                            <input type="hidden" name="id" value=<?php echo $patient["id"] ?>>
                            <button type="submit">Voir détail</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>



        </tbody>
    </table>



</main>


<?php
include_once('../partials/footer.php');
?>