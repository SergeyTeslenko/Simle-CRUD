<?php
include "database_connection.php";

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`, `gender`) 
            VALUES (NULL,'$first_name','$first_name','$email','$gender')";

    $result = mysqli_query($database, $sql);

    if ($result) {
        header("Location: index.php?msg=Created successfully");
    } else {
        echo 'Failed ...' . mysqli_connect_error($database);
    }
}
?>
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
    <div class="text-center mb-4">
        <h3> Add User </h3>
        <p class="text-muted"> Complete the form below to add a new user </p>
    </div>
</div>
<div class="container d-flex justify-content-center ">

    <form action="" method="post">
        <div class="row">
            <div class="col mb-4">
                <label for=""> First Name:</label>
                <input type="text" name="first_name" class="form-control" placeholder="Albert">

            </div>
            <div class="col">
                <label for=""> Last Name:</label>
                <input type="text" name="last_name" class="form-control" placeholder="Einstein">

            </div>
            <div class=" mb-4">
                <label for=""> Email:</label>
                <input type="text" name="email" class="form-control" placeholder="einstein@gmail.com">
            </div>
            <div class="form-group mb-4">
                <label> Gender:</label>
                <input type="radio"  class="form-check-input" name="gender" id="male" value="male">
                <label for="male" class="form-input-label">Male</label>

                <input type="radio" name="gender" class="form - check - input" id="female" value="female">
                <label for="female" class="form-input-label" > Female</label >
            </div>

            <div>
                <button type="submit" class="btn btn-success" name="submit">Save</button>
                <a href="index.php" class="btn btn-danger"> Cancel</a>
            </div>

    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>