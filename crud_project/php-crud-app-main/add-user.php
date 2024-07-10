
<?php 
include("./config/config.php");
$_SESSION['name'] = 'Hello World!';
// echo $_SESSION['name']; 
// form submit working, and storing the user into the database.
// check if the form is submitted or not
if(isset($_POST['submit'])){
    extract($_POST); // use to extrat all POST array data
    $date = date("Y-m-d H:i:s");
    // query to insert user details into database
    $sql = "INSERT INTO student(student_name,password,created_at) VALUES('$username','$password','$date')";
    if($conn->query($sql)){
        $_SESSION['sucess'] = "User has been created sucessfully!";
    }
    else{
        $_SESSION['error'] = "User Creation Failed!";    
    }
    header('LOCATION:users.php');
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
        <h2>Register Form</h2>

        <form action="add-user.php" method="post">
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit" name="submit">Signup</button>
            </div>
        </form>

        <div class="container" style="background-color:#f1f1f1">
            <a href="users.php" class="footerbtn">All Users</a>

            <a href="logout.php" class="footerbtn">Logout</a>

        </div>
    </section>

</body>

</html>