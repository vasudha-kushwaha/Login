<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Login";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

if(isset($_POST['submit'])){
    $type = $_POST['type'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    if($_POST['type']=="admin"){
        $sql="SELECT * FROM admin WHERE Name = '$user' AND Password = '$pass' ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            while($row = mysqli_fetch_assoc($result)) {
                $_SESSION["id"] = $row["AdminId"];
                $_SESSION["name"] = $row["Name"];
                $_SESSION["address"] = $row["Address"];
                mysqli_close($conn);
                header("Location: Admin/AdminHome.php");
            }
        } 
        else {
            echo "Admin Login Failed";
        }
    }

    if($_POST['type']=="com"){
        $sql="SELECT * FROM commercial WHERE Name = '$user' AND Password = '$pass' ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            while($row = mysqli_fetch_assoc($result)) {
                $_SESSION["id"] = $row["CommId"];
                $_SESSION["name"] = $row["Name"];
                $_SESSION["address"] = $row["Address"];
                mysqli_close($conn);
                header("Location: Commercial/ComHome.php");
            }
        } 
        else {
            echo "Commercial Login Failed";
        }
    }

    if($_POST['type']=="mac"){
        $sql="SELECT * FROM machine WHERE Name = '$user' AND Password = '$pass' ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            while($row = mysqli_fetch_assoc($result)) {
                $_SESSION["id"] = $row["MacId"];
                $_SESSION["name"] = $row["Name"];
                $_SESSION["address"] = $row["Address"];
                mysqli_close($conn);
                header("Location: Machine/MacHome.php");
            }
        } 
        else {
            echo "Machine Login Failed";
        }
    }

    if($_POST['type']=="pro"){
        $sql="SELECT * FROM production WHERE Name = '$user' AND Password = '$pass' ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            while($row = mysqli_fetch_assoc($result)) {
                $_SESSION["id"] = $row["ProId"];
                $_SESSION["name"] = $row["Name"];
                $_SESSION["address"] = $row["Address"];
                mysqli_close($conn);
                header("Location: Production/ProHome.php");
            }
        } 
        else {
            echo "Production Login Failed";
        }
    }
    else{
        echo "Please Select a user type";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php" method="POST">
        <h2>Login Page</h2>
        <table>
            <tr>
                <td>User Type</td>
                <td>
                    <select name="type" id="">
                        <option value="select">Select</option>
                        <option value="admin">Admin</option>
                        <option value="com">Commercial</option>
                        <option value="mac">Machine</option>
                        <option value="pro">Production</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Enter User Name</td>
                <td>
                    <input type="text" name="user" id="">
                </td>
            </tr>
            <tr>
                <td>Enter Password</td>
                <td>
                    <input type="text" name="pass" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Login" name="submit">
                </td>
                <td>
                    <input type="button" value="Sign Up">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>