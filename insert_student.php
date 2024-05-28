<?php
// Replace these variables with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";
$tableName = "student_form";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get values from the form
$enrollmentNo = $_POST['enrollment_no'];
$studentName = $_POST['student_name'];
$age = $_POST['age'];
$currentYear = $_POST['current_year'];
$phoneNumber = $_POST['phone_number'];
$emailID = $_POST['email_id'];
$parentsPhoneNumber = $_POST['parents_phone_number'];
$roomType = $_POST['room_type'];

// SQL query to insert data into the table
$sql = "INSERT INTO $tableName (enrollment_no, student_name, age, current_year, phone_number, email_id, parents_phone_number, room_type)
        VALUES ('$enrollmentNo', '$studentName', '$age', '$currentYear', '$phoneNumber', '$emailID', '$parentsPhoneNumber', '$roomType')";

// Perform the query and check for success
if ($conn->query($sql) === TRUE) {
    echo "Student added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
