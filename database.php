<?php
 include("./config/config.php");

//  Insert Query

$date = date("Y-m-d H:i:s");
// $sql = "INSERT INTO student(student_name,password,created_at) VALUES('Arpit','PASS123','$date')";

// execute the query

// $result = $conn->query($sql);
// if($result){
//     echo "New recoed created!";
// }
// else{
//     echo "Not any record exist!";
// }


// select query

// $sql = "SELECT id,student_name,created_at FROM student";
// $result = $conn->query($sql);

// // print_r($result);

// if($result->num_rows > 0){
//     while($row = $result->fetch_assoc()){
//         print_r($row);
//     }
// }



// update query

// $sql = "UPDATE student SET student_name = 'Ramesh' WHERE id = 1 ";
// $result = $conn->query($sql);

// if($result){
//     echo "Data updated sucessfully!";
// }
// else{
//     echo "Failed to update!";
// }

// Delete Query

$sql = "DELETE FROM student WHERE id = 1";
$result = $conn->query($sql);

if($result){
    echo "Record deleted sucessfully!";
}else{
    echo "Unsucessful operation!";
}