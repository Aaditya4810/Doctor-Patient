<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            font-size: 20px;
            display: flex;
    
        }
        
        #img{
            width: 100%;
            height: 100%;
            position: absolute;
            z-index:-1;
            opacity: 0.4;
        }
        .container{
            margin: auto;
        }
        
        .container input{
            border-radius: 2px;
        }
    </style>
</head>
<body>
    <img src="backimg.jpg" alt="img" id="img">
    <div class="container">   
        <h2>Book an Appointment</h2>
        <form action="database.php" method="post">
            Name:<input type="text" name="name" id="name"><br><br>
            Age:<input type="number" name="age" id="age"><br><br>
            Gender <input type="radio" name="gender" id="gender" value="Male">Male
            <input type="radio" name="gender" id="gender" value="Female">Female <br><br>
            Phone No:<input type="number" name="phone" id="phone"><br><br>
            City:<input type="text" name="city" id="City"><br><br>
            Appointment Date:<input type="date" name="date" id="Date"><br><br>
            Issue <br><br><textarea name="issue" id="issue" cols="30" rows="5"></textarea><br><br>
            <input type="reset" value="Reset">
            <input type="submit" value="Submit">
        </form>
    </div>
    
</body>

</html>