<?php
    $i=$_POST['id'];
    $n=$_POST['nam'];
    $gen=$_POST['g'];
    $p=$_POST['post'];
    $s=$_POST['sal'];
    $c=$_POST['city'];

    $con=mysqli_connect("localhost","root","")
    or
    die("Error in server connection");

    $db=mysqli_select_db($con,"empinfo")
    or
    die("Error in Database selection");

    $q="select * from employee";
    $res=mysqli_query($con,$q)
    or
    die("Error in query");
    $count=0;
    while($row=mysqli_fetch_array($res))
        {
            if($i==$row['empid'])
                {
                    $count=1;
                    break;
                }
        }
    if($count==1)
    {
        $q="update employee set name='$n',gender='$gen',post='$p',salary='$s', city='$c' where empid='$i' ";
        mysqli_query($con,$q)
        or
        die("Error in query");

        echo"<script language='javascript'>";
        echo"alert('record is updated')";
        echo"</script>";
        include("update.html");
    }
    else
    {
        echo"<script language='javascript'>";
        echo"alert('record is not found')";
        echo"</script>";
        include("update.html");
    }
?>