<?php
    $i=$_POST['id'];

    $con=mysqli_connect("localhost","root","")
    or
    die("Error in Server connection");

    $db=mysqli_select_db($con,"empinfo")
    or
    die("Error in Database connection");

    $q="select * from employee";
    $res=mysqli_query($con,$q)
    or
    die("Error in Query");
    $count=0;
    while($row=mysqli_fetch_array($res))
    {
        if($i==$row['empid'])
        {
            $count=1;
        }
    }
    if($count==1)
    {
        $q="delete from employee where empid='$i'";
        $r=mysqli_query($con,$q)
        or
        die("Error in query");

        echo"<script language='javascript'>";
        echo"alert('record is deleted')";
        echo"</script>";
        include("delete.html");
    }
    else
    {
        echo"<script language='javascript'>";
        echo"alert('record is not found')";
        echo"</script>";
        include("delete.html");
    }
