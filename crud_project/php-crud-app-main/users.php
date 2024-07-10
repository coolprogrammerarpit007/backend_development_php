
<?php 
    include("./config/config.php");
    include("./middleware.php");
    // Delete user from the database
    if(isset($_GET['id'])){
        extract($_GET);
        $sql = "DELETE FROM student WHERE id = ".$_GET['id'];
        $result = $conn->query($sql);
        if($result){
            $_SESSION['sucess'] = "Record has been deleted sucessfully!";
        }
        else{
            $_SESSION['error'] = "Unfortunately, data can not be deleted!";    
        }
        header('LOCATION:users.php');
    }

    // get all the users 
    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
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
        <h2>All Users</h2>

        <table id="users">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if($result->num_rows > 0){
                    while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['student_name']?></td>
                        <td><?php echo date('d-m-y H:i:A',strtotime($row['created_at']))?></td>
                        <td>
                            <a href="edit-user.php?id=<?php echo $row['id']?>" class="button edit">Edit</a>
                            <a href="users.php?id=<?php echo $row['id']?>" class="button delete">Delete</a>
                        </td>
                    </tr>
                <?php }
                } 
                else{
                    echo "<h1>No Data Found!</h1>";
                }
                ?>
            </tbody>
        </table>

        <div class="container" style="background-color:#f1f1f1">
            <a href="add-user.php" class="footerbtn">Add User</a>

            <a href="logout.php" class="footerbtn">Logout</a>
        </div>
    </section>

</body>

</html>