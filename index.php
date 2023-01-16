<!doctype html>
<html lang="en">
<head>
    <meta charset="utf - 8">
    <meta name="viewport" content="width = device - width, initial - scale = 1">
    <title>PHP Crud Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg justify-content-center bg-light fs-3 mb-5">
    PHP CRUD APPLICATION
</nav>

<div class="container">
    <?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
               echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
                 '.$msg.'
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
    ?>

    <a href="add-new.php" class="btn btn-dark mb-5">Add New</a>

    <table class="table table-hover text-center">
        <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Email</th>
            <th scope="col">Gender</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include 'database_connection.php';
        $sql = "SELECT * FROM `crud`";
        $result = mysqli_query($database, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['last_name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-success mb-5">Update</a>
                    <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger mb-5">Delete</a>
                </td>
            </tr>
            <?php
        }

        ?>

        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>