<?php
    $i=$_POST['id'];
    $n=$_POST['nam'];
    $a=$_POST['aut'];
    $p=$_POST['price'];

    $con=mysqli_connect("localhost","root","")
    or
    die("Error in server connection");

    $db=mysqli_select_db($con,"libraryinfo")
    or
    die("Error in Databse connection");

    $q="select * from library";
    $res=mysqli_query($con,$q)
    or
    die("Error in query");  
    $count=0;
    while($row=mysqli_fetch_array($res))
        {
            if($i==$row['bid'])
                {
                    $count=1;
                    break;
                }
        }
    if($count==1)
    {
        $q="update library set bname='$n',author='$a',price='$p' where bid='$i' ";
        mysqli_query($con,$q)
        or
        die("Error in query");

        echo"<script language='javascript'>";
        echo"alert('Record is updated')";
        echo"</script>";
        include("update.html");
    }
    else
    {
        echo"<script language='javascript'>";
        echo"alert('Record not found')";
        echo"</script>";
        include("update.html");
    }