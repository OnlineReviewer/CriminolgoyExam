<head>
   
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Exam Management System</title>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="../asset/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="../asset/css/adminlte.min.css">
            <link rel="stylesheet" href="../asset/css/style.css">
            <style>
    .user-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .user-item {
        flex-basis: calc(33.33% - 10px); /* Adjust as needed */
        margin-bottom: 10px;
        text-align: center;
    }

    .rounded-image {
        object-fit: cover;
        width: 100px;
        height: 100px;
        border: solid 1px #CCC;
        border-radius: 50%;
        overflow: hidden;
    }
</style>
   </head>
<div class="user-list">
      <?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Include your database connection code here
include('connector.php');

$selectedCriteria = isset($_GET['criteria']) ? $_GET['criteria'] : 'grade';

// Construct the SQL query based on the selected criteria
$sql = "SELECT * FROM student ORDER BY $selectedCriteria DESC LIMIT 9";
$result = $conn->query($sql);

// Check if the query was successful
if ($result && $result->num_rows > 0) {
    $count = 0;
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            echo '<div class="user-item">';
            
            // Check if a profile image is available
            if (!empty($row['profile'])) {
                echo '<img src="images/' . $row['profile'] . '" alt="User Image" class="rounded-image" />';
            } else {
                // Provide a default image if no profile image is available
                echo '<img src="../asset/img/avatar.png" alt="Default Image" class="rounded-image" />';
            }

            echo '<a href="rates.php?studid=' . $row['studid'] . '">' . $row['fname'] . '</a>';
            echo '<span class="users-list-date">' . $row['dateregister'] . '</span>';
            
            // Details at the bottom

            
            echo '</div>';

            // Alternate left and right
            $count++;
            if ($count % 3 == 0) {
                echo '<div style="flex-basis: 100%;"></div>';
            }
        }
} else {
    echo '<p>No data available</p>';
}

?>