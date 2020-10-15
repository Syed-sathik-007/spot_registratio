<html>
<head>
<meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Registration ID</title>
    <style type="text/css">
        * {
        margin: 0px;
        padding: 0px; 
        flex-wrap: wrap;
        }

        body {
        font-size: 120%;
        background-image: url("bg3.jpg");
        }

        h1 {
            width: auto;
            margin: 50px auto 0px;
            color: white;
            background-color: rgba(0,0,0,.45);
            text-align: center;
            /*border: 1px solid #B0C4DE;*/
            border-bottom: none;
            border-radius: 10px 10px 10px 10px;
            padding: 20px;
        }

        h2 {
            padding-top: 10px;
            text-align: center;
            color: white;
        }

        table {
            margin: 8px;
            margin: 0 auto;
            margin-top: 20px;
        }

        th {
            font-size: 20px;
            background-color: rgba(0,0,0,.45);
            color: white;
            padding: 10px 10px;
            border-collapse: separate;
            /*border: 1px solid #000;*/
            text-align: center;
        }

        td {
            font-size: 20px;
            border: 1px solid #DDD;
            color: white;
            padding: 10px 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
$servername = "sql112.epizy.com";
$username = "epiz_24504114";
$password = "3OHuEkunUz";
$dbname = "epiz_24504114_registration";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
echo "<h1>Participants</h1>";
if ($result->num_rows > 0) {
    echo "<br.<br><table><tr><th>ID</th><th>Name</th><th>College</th><th>Phone</th></tr>";
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["college"]."</td><td>".$row["phone"]."</td>
	</tr>";
    }
    echo "</table>";
} 

else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>