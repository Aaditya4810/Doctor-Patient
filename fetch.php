<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetching data</title>
    <style>
        body{
            text-align:center;
        }
        table{
            width:90%;
            margin:auto;
            color:black;
            font-size:20px;
            text-align:left;
            border:2px solid black;
            border-collapse:collapse;
        }
        th{
            background-color:rgb(184, 64, 64);
            color:black;
            border:2px solid black;
        }
        td{
            /* color:orange; */
            border:2px solid black;
            padding:2px;
        }
        tr:nth-child(odd){
            background-color:lightcoral;
            color:black;
        }
    </style>
</head>
<body>
    <h2>List of Patients</h2>
    <table>
        <tr>
            <th>S_no</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>City</th>
            <th>Appointment Date</th>
            <th>Issue</th>
        </tr>
        <?php
            $con=mysqli_connect("localhost","root","","appointment");
            if($con-> connect_error){
                die("connection failed:". $con-> connect_error);
            }
            $sql= " SELECT S_no, Name, Age, Gender, Phone, City, Date, Issue FROM patients";
            $result= $con->query($sql);
            
            if($result->num_rows >0){
                while($row=$result->fetch_assoc()){
                   echo "<tr><td>".$row["S_no"]."</td><td>".$row["Name"]."</td><td>".$row["Age"]."</td><td>".$row["Gender"]."</td><td>".$row["Phone"]."</td><td>".$row["City"]."</td><td>".$row["Date"]."</td><td>".$row["Issue"]."</td></tr>";
                }
                echo "</table>";
            }
            else{
                echo "No result";
            }
            $con->close();
        ?>
    </table>
</body>
</html>