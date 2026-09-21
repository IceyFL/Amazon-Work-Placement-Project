<?php //this is common
//function to add person to el database
function register($conn){
    //prepare and execute the sql query
    $sql = "INSERT INTO userinfo (FirstName, LastName, Email, SchoolYear, school_id) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql); //prepare to sql

    $stmt->bindParam(1, $_POST['fname']);
    $stmt->bindParam(2, $_POST['lname']);
    $stmt->bindParam(3, $_POST['email']);
    $stmt->bindParam(4, $_POST['Year']);
    $stmt->bindParam(5, $_POST['school_id']);

    $stmt->execute(); //run the query to insert
    $conn = null; //closes the connection so cant be abused
    return true; //registration successfull
}

//function to add a school
function addSchool($conn){
    //prepare and execute the sql query
    $sql = "INSERT INTO schools (SchoolName, SchoolEmail, SchoolLocation) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql); //prepare to sql

    $stmt->bindParam(1, $_POST['schname']);
    $stmt->bindParam(2, $_POST['schemail']);
    $stmt->bindParam(3, $_POST['schloc']);

    $stmt->execute(); //run the query to insert
    $conn = null; //closes the connection so cant be abused
    return true; //registration successfull
}

// Function to fetch all schools from the database
function getSchools($conn){
    // Prepare and execute the SQL query
    $sql = "SELECT * FROM schools";
    $stmt = $conn->prepare($sql); // Prepare the SQL statement

    $stmt->execute(); // Run the query

    // Fetch all records as an associative array
    $schools = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $conn = null; // Closes the connection so it can't be abused
    return $schools; // Returns the list of schools
}
?>