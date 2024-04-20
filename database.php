<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $date = $_POST['date'];
    $issue = $_POST['issue'];
    $sql = "INSERT INTO `appointment`.`patients` (`Name`, `Age`, `Gender`, `Phone`, `City`, `Date`, `Issue`) VALUES ('$name', '$age', '$gender', '$phone', '$city', '$date', '$issue');";

    // Execute the query
    if($con->query($sql) == true){
        echo "<h3>Your Appointment is booked Successfully</h3>";
        echo "<p>Reach out centre on $date</p>";

    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data store in Datbase</title>
    <style>
        h3{
            margin:5rem;
            text-align:center;
            color:green;
            font-size:20px;
        }
        p{
            text-align:center; 
            color:green;
            font-size:20px;
        }
    </style>
</head>
<body>
    
</body>
</html>