<?php //this is common


#user message to pass error messages through the session to different parts of the site.
function user_message() {
    $message = "";

    //check if the user message value is set in the usermessage super global
    if (isset($_SESSION["usermessage"])){
        //save message to variable
        $message = $_SESSION["usermessage"];
        //unset it so that it isn't found again
        unset($_SESSION["usermessage"]);
    }
    // return it from the function
    return $message;
}



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
    //Prepare and execute the SQL query
    $sql = "SELECT * FROM schools";
    $stmt = $conn->prepare($sql); //Prepare the SQL statement

    $stmt->execute(); // execute the query

    //get all the stuff from the database
    $schools = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $conn = null; //close connection so cant be abused
    return $schools; //return the list of schools
}
?>