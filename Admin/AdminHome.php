<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h2>Welcome Admin Home</h2>

    <h3>Admin Details</h3>
    <h3>Admin Id : <?php echo $_SESSION["id"]; ?></h3>
    <h3>Admin Name : <?php echo $_SESSION["name"]; ?></h3>
    <h3>Admin Address : <?php echo $_SESSION["address"]; ?></h3>

</body>
</html>