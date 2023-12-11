<?php
include('../connector.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_POST);
    date_default_timezone_set("Asia/Manila");
    $dateregister = date("Y-m-d");

    // Hash the password
    $passw = hash('sha256', $pass);
    function createSalt()
    {
        return '2123293dsj2hu2nikhiljdsd';
    }
    $salt = createSalt();
    $password = hash('sha256', $salt . $passw);

    // Check if the student ID already exists
    $existingStudentQuery = "SELECT * FROM student WHERE studid = '$studid'";
    $result = mysqli_query($conn, $existingStudentQuery);

    if (mysqli_num_rows($result) > 0) {
        // Student with the same ID already exists
        echo "Student with the same ID already exists. Please choose a different student ID.";
    } else {
        // Student ID is unique, proceed with insertion
        $sql = "INSERT INTO student(studid, fname, mname, lname, gender,  pass, dateregister) 
                VALUES ('$studid', '$fname', '$mname', '$lname', '$gender', '$password','$dateregister')";

        if ($conn->query($sql) === TRUE) {
            // Redirect to the login page after successful registration
            ?>
            <script type="text/javascript">
                window.location = "../login.php";
            </script>
            <?php
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            ?>
            <script type="text/javascript">
                window.location = "../index.php";
            </script>
            <?php
        }
    }
}

// Close the database connection
$conn->close();
?>