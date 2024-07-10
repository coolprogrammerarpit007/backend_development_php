<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handling Forms  IN PHP</title>
</head>
<body>
    <form action="form.php" method="post">
        <label for="course"> Select any course: </label><br>
        <input type="radio" name="course" value="BCA"> BCA </br>
        <input type="radio" name="course" value="MCA"> MCA </br>
        <input type="radio" name="course" value="PCA"> PCA </br>

        <input type="Submit" name = "confirm" value="confirm">
    </form>


    <?php
    if(isset($_POST['confirm'])){
        $course = $_POST['course']; 
        echo $course;

    }
    
    // when trying to store checkboxes give name = "arr[]"
    ?>
</body>
</html>