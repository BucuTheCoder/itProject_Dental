<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_cruzdentaldatabase']))
{
    $cruzdentaldatabase_id = mysqli_real_escape_string($con, $_POST['delete_cruzdentaldatabase']);

    $query = "DELETE FROM `admin` WHERE `id`='$cruzdentaldatabase_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Dentist Profile Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['save_admin']))
{
    $Admin_Name = mysqli_real_escape_string($con, $_POST['name']);
    $Username = mysqli_real_escape_string($con, $_POST['username']);
    $Gender = mysqli_real_escape_string($con, $_POST['gender']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $Address = mysqli_real_escape_string($con, $_POST['Address']);
    $Birthday= mysqli_real_escape_string($con, $_POST['birth']);


    $query = "INSERT INTO `admin` ( `Admin_Name`, `Username`, `Gender`, `phone`, `Address`, `Birthday`) VALUES ('$Admin_Name','$Username','$Gender','$phone','$Address','$Birthday')";
    
   $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}
?>