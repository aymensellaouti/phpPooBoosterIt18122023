<?php
include_once 'class/autoloader.php';
    $userRepository = new UserRepository();
    $users = $userRepository->findAll();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <title>Datatable</title>
</head>

<body>
    <div class="container">
        <div class="alert alert-ligth">
            <a class="btn btn-outline-primary" href="addUser.php">Add User</a>
        </div>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Date de naissance</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $user->id ?></td>
                        <td><?= $user->name ?></td>
                        <td><?= $user->birthday ?></td>
                        <!-- details.php?id=2 -->
                        <td>
                            <a class="btn btn-outline-info" href="details.php?id=<?= $user->id ?>">Détails</a>
                            <a class="btn btn-outline-success" href="updateUser.php?id=<?= $user->id ?>">Update</a>
                            <a class="btn btn-outline-danger" href="deleteUser.php?id=<?= $user->id ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>



    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>

</html>