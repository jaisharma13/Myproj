

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Student Records</title>

</head>
<style>


   .txt{
    text-align: center;
   }
   .txt-align-cntr {
  text-align: center;
}
    #wrapper{
    width: 100%;
    max: width 1221px;
    margin: 50px auto 0;
    background-color: #fff;

}

table, tr,td {
        border: 1px solid black;
        margin: 1px auto;
        padding: 8px 25px;
       background: #c5d1d5;
}
</style>
<body>
   
   
<div id="main-content">
    <h2 class="txt-align-cntr">All Records</h2> 
    <?php
        $conn = mysqli_connect("localhost","root","","registrations") or die ("connection failed");
        $sql = "SELECT * FROM registrations";
        $result =mysqli_query($conn,$sql) or die ("query uncessfull.");
        if (mysqli_num_rows($result) > 0)
        {
    ?>
    <table cellpadding="10px">
        <thead>
        <th>id</th>
        <th>firstName</th>
        <th>lastName</th>
        <th>email </th> 
        <th>number</th>
        <th>gender</th>
        <th>hobbies</th>
        <th>course</th>
        <th>comments</th>
        <th>operation</th>
        
        </thead>
        <tbody>  
            <?php 
                 while($row = mysqli_fetch_assoc($result))
                    {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['firstName']; ?></td>
                    <td><?php echo $row['lastName']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['hobbies']; ?></td>
                    <td><?php echo $row['course']; ?></td>
                    <td><?php echo $row['comments']; ?></td>
                
                   
                    <td>
                        <a href='editRecord.php?id=<?php echo $row['id'];?>'>Edit</a>
                        <a href='delete.php?id=<?php echo $row['id'];?>'>Delete</a>
                    </td>
                </tr>
                <?php } ?>
        </tbody>
    </table>
    <?php } ?>
    <form>
    </form>
</div>
</div>
</body>
</html>