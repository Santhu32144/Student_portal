<?php

$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "myDatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// escape variables for security
$firstName = $conn->real_escape_string($_POST['myfirstname']);
$lastName = $conn->real_escape_string($_POST['mylastname']);
$dob = $conn->real_escape_string($_POST['mydob']);
$gender = $conn->real_escape_string($_POST['mygender']);
$contactNumber = $conn->real_escape_string($_POST['mycontactnumber']);
$email = $conn->real_escape_string($_POST['myemail']);
$street = $conn->real_escape_string($_POST['mystreet']);
$city = $conn->real_escape_string($_POST['mycity']);
$state = $conn->real_escape_string($_POST['mystate']);
$country = $conn->real_escape_string($_POST['mycountry']);
$department = $conn->real_escape_string($_POST['mydepartment']);
$dateOfAdmission = $conn->real_escape_string($_POST['myadmissiondate']);
$dateOfLeaving = $conn->real_escape_string($_POST['myleavingdate']);
$courseCompletionYear = $conn->real_escape_string($_POST['mycoursecompletionyear']);
$feePaid = $conn->real_escape_string($_POST['myfee']);

$sql = "INSERT INTO students (firstName, lastName, dob, gender, contactNumber, email, street, city, state, country, department, dateOfAdmission, dateOfLeaving, courseCompletionYear, feePaid)
VALUES ('$firstName', '$lastName', '$dob', '$gender', '$contactNumber', '$email', '$street', '$city', '$state', '$country', '$department', '$dateOfAdmission', '$dateOfLeaving', '$courseCompletionYear', '$feePaid')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>