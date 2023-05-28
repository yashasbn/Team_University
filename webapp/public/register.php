<?php
$servername = "localhost";
$username = "root";
$password = "Password@1";
$dbname = "Application";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $department = $_POST["department"];

    // Prepare and execute the SQL statement to insert the data into the database
    $sql = "INSERT INTO users (name, email, department) VALUES ('$name', '$email', '$department')";

    if ($conn->query($sql) === TRUE) {
        
        echo "Data stored in the database successfully.";
    } else {
      
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
