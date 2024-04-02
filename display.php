<html>
    <head>
        <title>display</title>
        <style>
          body{
            background: #04D9FF;
          }  
          table{
            background-color: white;
          }
            </style>
</head>
</html>
<?php
include("connection.php");

$query = "SELECT * FROM FORM";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
if ($total != 0) {
    echo "<h2 align='center'><mark>Displaying All Records</mark></h2>";
    echo "<table border='3' cellspacing='7' width='65%'> 
            <tr>
                <th width='10%'>Full Name</th>
                <th width='20%'>Email</th>
                <th width='10%'>Phone No.</th>
                <th width='10%'>State</th>
                <th width='15%'>City</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($data)) {
        echo "<tr>
                <td>" . $row['fname'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['state'] . "</td>
                <td>" . $row['city'] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Table has no records";
}
?>
