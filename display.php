<?php
   $con=mysqli_connect("localhost","root","")
    or
    die("Error in Server connection");

    $db=mysqli_select_db($con,"empinfo")
    or
    die("Error in Database selection");

    $q="select * from employee";
    $res=mysqli_query($con,$q)
    or
    die("Error in Query");
    
    echo "<h1 align='center'>Employee Records</h1>";
    echo "<table border='1' align='center' cellpadding='10'>";
    echo "<tr>";
    echo "<th>Employee id</th>";
    echo "<th>Name</th>";
    echo "<th>Gender</th>";
    echo "<th>Post</th>";
    echo "<th>Salary</th>";
    echo "<th>City</th>";
    echo "</tr>";
    while($row=mysqli_fetch_array($res))
    {
        echo "<tr>";

        echo "<td>".$row['empid']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['gender']."</td>";
        echo "<td>".$row['post']."</td>";
        echo "<td>".$row['salary']."</td>";
        echo "<td>".$row['city']."</td>";

        echo "</tr>";
    }
    echo "</table>";
?>