<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="home.css"> -->
    <style>
        body{
            margin: auto;
            text-align: center;
            background-image: url("hos.jpg");
            background-size: cover;
        }
        
        .doctor{
            height: 10vh;
            width: 50vw;
            padding: 1rem;
            background-color: orangered;
            color: black;
            border: 5px solid red;
            border-radius: 2rem;
            margin: 2vh;
            font-size: 25px;
            font-weight: bolder;
        }
        
        .patient{
            height: 10vh;
            width: 50vw;
            padding: 1rem;
            background-color:blue;
            color: black;
            border: 5px solid darkblue;
            border-radius: 2rem;
            font-size: 25px;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <h1>Welcome to Doctor Patient Portal</h1>
    <form action="doctor.php">
        <button class="doctor">Doctor</button>
    </form> 
    <form action="patient.php">
        <button  class="patient">Patient</button>
    </form>
</body>
</html>
