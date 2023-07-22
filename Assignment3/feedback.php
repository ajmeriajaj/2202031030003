<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedbackform";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $successConn = "Connection Established!!";
    echo $successConn;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Name_1 = $_POST['Name_1'];
    $Email = $_POST['Email'];
    $Message_1 = $_POST['Message_1'];
    // $contactno = $_POST['contactno'];
    // $age = $_POST['age'];
    // $msg = $_POST['msg'];

    if (!empty($Name_1) && !empty($Email) && !empty($Message_1)) {
        $sql = "INSERT INTO feedbackdata (Name_1, Email, Message_1) VALUES ('$Name_1', '$Email', '$Message_1')";

        if ($conn->query($sql) === TRUE) {
            $successMessage = "New record created successfully";
            header("Location: feedback.php");
            exit(); 
        } else {
            $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $errorMessage = "Please fill in all the fields";
    }
}
$conn->close();
?>







    



















