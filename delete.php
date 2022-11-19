<?php
$Id = $_GET['id'];
$conn = mysqli_connect("localhost","root","","registrations") or die ("connection failed");
$sql = "DELETE FROM registrations WHERE id = {$Id}";
$result = mysqli_query($conn, $sql) or die ("query unsucessful");
if ($result==1) {
    echo"<script>alert('Your record has been saved Sucessfully');</script>";
} else {
    echo"<script>alert('Record Not Saved');</script>";
}
header("location: http://localhost/form/display.php");
mysqli_close($conn);
?>