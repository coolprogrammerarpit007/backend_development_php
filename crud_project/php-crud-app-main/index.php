<?php
    // User Functuanility
include('./config/config.php');
if(isset($_POST['submit'])){
    extract($_POST); // use to extrat all POST array data
    // $storing password in the encrypted form
    // query to select user -> Login Form Submit query
    $sql = "SELECT * FROM student WHERE student_name = '$username' AND password = $password";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        echo "Sucessful";
        $_SESSION['is_user_logged_in'] = true;
        $_SESSION['user_data'] = mysqli_fetch_assoc($result);
        header('LOCATION:users.php'); // redirect to the users.php
        exit;
    }
    else{
        $_SESSION['error'] = "Invalid Login Credantials";
        include('./include/alert.php');
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet">
    <title>PHP CRUD Application</title>
</head>

<body>

    <section class="section">
        <?php include("include/alert.php") ?>
        <h2>Login Form</h2>

        <form action="index.php" method="post">
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit" name="submit">Login</button>

            </div>
        </form>
    </section>

</body>

</html>