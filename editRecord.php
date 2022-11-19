<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update record</title>


    
</head>
<style>
 
 h2 {
  text-align: center;
  color: white;
  font-size: 28px;

}
    table{
        border: 1px solid black;
        margin: 1px auto;
        padding: 8px 25px;
       background: #c5d1d5;
}
  tr{
      padding: 10px;
  }

  td{
      padding: 13px;
  }
body {
    background-image: url(abc.jpg);
}
  #course {
  width: 90px;
  height: 33px;
  background: white;
}
input#lastName,input#firstName ,#email,#mobile,#marks,#number  {
  width: 253px;
  height: 25px;
}
#comments {
  width: 250px;
      height: 52px;
}
#btn {
  width: 149px;
  height: 51px;
  border-radius: 9px;
  border: 1px;
}
#btn {
  width: 151px;
  height: 53px;
  border-radius: 9px;
  border: 1px;
  background: #77a9c6;
  color: white;
  font-size: 20px;
}
.error {
  color: red;
}

</style>


<body>
  <section class="bg-img">
    <h2>update record</h2>


    <?php
        $conn = mysqli_connect("localhost","root","","registrations") or die ("connection failed");
        $Id = $_GET['id'];
        $sql = "SELECT * FROM registrations WHERE id = '$Id'";
        $result =mysqli_query($conn,$sql) or die ("Query uncessfull.");
        if (mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_array($result)){
    ?>
<form  action="updateRecord.php" method="POST">
        <table>
            <tr>

            <td><input type="hidden" name="id" value="<?php echo $row['id']; ?></td>
            </tr>
            <tr>
                <td>
                    <label for="firstName">First Name</label>  <span class="error"></td>
                    <td>
                    <input type="text"  id="firstName"  name="firstName" value="<?php echo $row['firstName']; ?>" maxlength="20" required > <span class="error">* </td>
            </tr>
            <tr>
                    <td><label for="lastName">Last Name</label></td>
                    <td><input type="text" id="lastName" name="lastName" value="<?php echo $row['lastName']; ?>" required> </td>
                </tr>
                   <tr> 
                       <td><label for="email">Email</label></td>
                       <td><input type="text" id="email"  name="email" maxlength="20" value="<?php echo $row['email']; ?>" required> <span class="error">* </td>
                </tr>
                <tr> 
                    <td><label for="number">Mobile No.</label></td>
                    <td><input type="number" id="number"  name="number" maxlength="10" value="<?php echo $row['number']; ?>" required> <span class="error">* </span><br></td>
                 </tr>
                <tr>
                   <td> <label for="gender">Gender</label></td>
                   <td><label for="fname">male</label>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="fname">female</label>
                    <input type="radio" id="female" name="gender" value="female"><br></td>
                </tr>
                <tr>
                    <td> <label for="hobbies">Hobbies</label></td>
    
                   <td>
                    <input type="checkbox" id="cricket" name="hobbies">
                   <label for="cricket"> Cricket</label>
                   <input type="checkbox" id="traveling" name="hobbies">
                   <label for="traveling"> Traveling</label>
                   <input type="checkbox" id="reading" name="hobbies">
                   <label for="reading">Reading </label> </td>
                </tr>
                <tr>
                    <td>  <label for="course">COURSE</label></td>
                    <td><select id="course" name="course">
                        <option value="MCA">MCA</option>
                        <option value="M.sc">M.sc</option>
                        <option value="BCA">BCA</option>
                        <option value="B.sc">B.sc</option>
                      </select>
                    </td>
                </tr>
               
    
                <tr>
                    <td>  <label for="comments">Review</label></td>
                    <td>
                        <textarea name="comments" id="comments" value="<?php echo $row['comments']; ?>">
                         
                            </textarea>
                    </td>
                </tr>
                <tr>
                    
                </tr><td></td>
              
                <td><button id="btn">Update</button>
             </td>
            </tr>
        
    
        </table>
 
  </form>

  <?php }
        }
    ?>


 </section>
    
</body>
</html>