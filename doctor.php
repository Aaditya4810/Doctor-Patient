<?php
if(isset($_POST['username']))
{
// Retrieve username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the credentials match (you can replace this with database validation)
if ($username === 'aaditya' && $password === 'aadi2109') {
    $_SESSION['username'] = $username; // Store username in the session
    header('Location: fetch.php'); // Redirect to another PHP page
    exit();
} else {
    echo "<h2>Invalid username or password.</h2>";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor login Section</title>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            font-size: 20px;
            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
            background-color: antiquewhite;
    
        }
        h2{
            color:red;
        }
        .container{
            margin:
        }
        
        .container input{
            border-radius: 2px;
        }
    </style>
</head>
<body>
    <br>
    <div class="container">
    <form action="doctor.php" method="post">
        <h1>Login to Access Data</h1>
        Username: <input type="text" name="username" id="username"><br><br>
        Password: <input type="password" name="password" id="password"><br><br>
        <button>Submit</button>
    </form>
    </div>
</body>
</html>