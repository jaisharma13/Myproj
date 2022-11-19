<?php
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $gender = $_POST['gender'];
  $hobbies = $_POST['hobbies'];
  $course = $_POST['course'];
  $comments = $_POST['comments'];
  

  $conn = mysqli_connect("localhost","root","","registrations") or die ("connection failed");
  $sql = " INSERT INTO registrations (firstName, lastName, email, number, gender, hobbies, course, comments )
          VALUES ('$firstName', '$lastName', '$email', '$number', '$gender', '$hobbies', '$course','$comments')";
  $result = mysqli_query($conn, $sql);
      if ($result==1) {
          echo"<script>alert('Your record has been saved Sucessfully');</script>";
      } else {
          echo"<script>alert('Record Not Saved');</script>";
      }
     header("location: http://localhost/form/display.php");
      mysqli_close($conn);
?>



