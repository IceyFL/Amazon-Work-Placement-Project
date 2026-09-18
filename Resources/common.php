<?php //this is common
//function to add person to el database
function register($conn){
    //prepare and execute the sql query
    $sql = "INSERT INTO userinfo (FirstName, LastName, Email, SchoolName, SchoolEmail, Pathway, SchoolYear) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql); //prepare to sql

    $stmt->bindParam(1, $_POST['fname']);
    $stmt->bindParam(2, $_POST['lname']);
    $stmt->bindParam(3, $_POST['email']);
    $stmt->bindParam(4, $_POST['schname']);
    $stmt->bindParam(5, $_POST['schemail']);
    $stmt->bindParam(6, $_POST['path']);
    $stmt->bindParam(7, $_POST['schyr']);

    $stmt->execute(); //run the query to insert
    $conn = null; //closes the connection so cant be abused
    return true; //registration successfull

}
?>