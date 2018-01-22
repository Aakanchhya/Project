<?php session_start();

    include 'connect.inc.php';
    
    if(isset($_GET['uname'],$_GET['pass']))
    {
        $name = $_GET['uname'];
        $password = $_GET['pass'];
        
        //sql Query
        $sql = "select * from login where username = '$name' and password = '$pass'";
        
        //connecting and executing Query
        $result = mysqli_query($con,$sql);
        
        if(isset($result))
        {
            header('location:../index.php');
        }
    }

?>