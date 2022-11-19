<?php
    $Id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $hobbies = $_POST['hobbies'];
    $course = $_POST['course'];
    $comments = $_POST['comments'];
  
        $conn = mysqli_connect("localhost","root","","registrations") or die ("connection failed");
        $sql = "UPDATE registrations SET firstName = '{$firstName}',lastName = '{$lastName}',email = '{$email}',number ='{$number}',gender ='{$gender}',hobbies ='{$hobbies}',course ='{$course}',comments ='{$comments}' WHERE id = {$Id}";
        $result = mysqli_query($conn, $sql); //or die ("Record not saved");
        if ($result==1) {
            echo"<script>alert('Your record has been saved Sucessfully');</script>";
        } else {
            echo"<script>alert('Record Not Saved');</script>";
        }
        header("location: http://localhost/form/display.php");
        mysqli_close($conn);
?>

