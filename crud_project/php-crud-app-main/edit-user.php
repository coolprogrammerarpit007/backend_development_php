<?php 
    include('./config/config.php');
    // Getting users data by users id
    if(isset($_GET['id'])){
        $sql = "SELECT * FROM student WHERE id= " . $_GET['id'] ;
        $result = $conn->query($sql);
        $user = mysqli_fetch_assoc($result);
        // var_dump($user);
        // var_dump($user);
    }else{
        echo "Invalid Request!";
        exit;
    }


    // update the user data
    if(isset($_POST['submit'])){
        extract($_POST); // use to extrat all POST array data
        // query to update user details into database
        $sql = "UPDATE student SET student_name = '$username' WHERE id = " . $_GET['id'];
        if($conn->query($sql)){
            echo "User Data Updated sucessfully!";
        }
        else{
            echo "Something went wrong, data updation can not be proceed!";
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
        <h2>Edit User</h2>

        <form action="edit-user.php?id=<?php echo $user['id'] ?>" method="post">

        <!-- update the data with the dynamic values -->
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required value="<?php echo $user['student_name'] ?>">
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required value="<?php echo $user['password'] ?>">
                 

                <button type="submit" name="submit">Update</button>
            </div>
        </form>

        <div class="container" style="background-color:#f1f1f1">
            <a href="users.php" class="footerbtn">All Users</a>
        </div>
    </section>

</body>

</html>