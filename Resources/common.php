<?php //this is common


//function to check if the user exusts
function onlyuser($conn, $email) {
    //make statement add params and execute it
    $sql = "SELECT email FROM user WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt ->bindparam(1, $email);
    $stmt ->execute();

    //get results
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    //return if the user is valid(not in use already)
    return !$result;
}

//function to register the user
function reguser($conn) {
    $sql = "INSERT INTO user (name, email, pswd) VALUES (?, ?, ?)";
    $conn->prepare($sql); //preapre the sql

    //add parameters
    $conn->bind_param(1, $_POST["name"]);
    $conn->bind_param(2, $_POST["email"]);
    $conn->bind_param(3, password_hash($_POST["password"], PASSWORD_DEFAULT)); //hash the password

    //execute the statement
    $conn->execute();
}


//function to login to an account
function login($conn) {
    //make the statement
    $sql = "SELECT * FROM user WHERE email = ? AND pswd = ?";
    $conn->prepare($sql);
    //bind the params
    $conn->bind_param(1, $_POST["email"]);
    $conn->bind_param(2, password_hash($_POST["pswd"], PASSWORD_DEFAULT)); //hash the pswd
    $conn->execute(); //run the cmd
    //get the result
    $result = $conn->fetchall(PDO::FETCH_ASSOC);
    return (bool)$result; //return if the credentials are correct (the email and pswd were found in db)
}


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