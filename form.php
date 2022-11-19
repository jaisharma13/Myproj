<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration Page</title>
    
        
    <script>
        
    </script>

    
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
input#lastName,input#firstName ,#email,#mobile,#marks,#number,#mnumber  {
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
#user,#last,#error,#mobil,#gndr{
    color:red;

}

</style>



<body>
  <section class="bg-img">
    <h2>Student Registration</h2>
    <form name="myform"  id="register" action="action.php" method="post" onsubmit="return validation()">
        <table>
            <tr>
                <td>
                    <label for="firstName">First Name</label>  </td>
                    <td>
                    <input type="text"  id="firstName"  name="firstName" maxlength="20" value=""  > <span  id="user">*</span> </td>
            </tr>
            <tr>
                    <td><label for="lastName">Last Name</label></td>
                    <td><input type="text" id="lastName"  name="lastName" > <span  id="last">*</span> </td>
                </tr>
                   <tr> 
                       <td><label for="email">Email</label></td>
                       <td><input type="text" id="email" value="" name="email" maxlength="20" > <span  id="error">* </td>
                </tr>
                <tr> 
                    <td><label for="number">Mobile No.</td>
                    <td><input type="number" id="number"  name="number"  > <span id="mobil">* </span><br></td>
                 </tr>
                <tr>
                   <td> <label for="gender">Gender</label></td>
                   <td><label for="male">male</label>
                    <input type="radio" id="gender" name="gender" name="male" value="male">
                    <label for="female">female</label>
                    <input type="radio" id="gender" name="gender" name="female"  value="female">   <span  id="gndr"> *</span><br></td> </td>
                </tr>
                <tr>
                    <td> <label for="hobbies">Hobbies</label></td>
    
                   <td>
                    <input type="checkbox" id="hobbies" name="hobbies" value="cricket">
                   <label for="cricket"> Cricket</label>
                   <input type="checkbox" id="hobbies" name="hobbies" value="traveling">
                   <label for="traveling"> Traveling</label>
                   <input type="checkbox" id="hobbies" name="hobbies" value="reading">
                   <label for="reading">Reading </label> <span  id="hob"> </td>
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
                        <textarea name="comments" id="comments">
                         
                            </textarea>
                    </td>
                </tr>
                <tr>
                    
                </tr><td></td>
              
                <td><button id="btn" value="submit">Submit</button>
             </td>
            </tr>
               
    
        </table>
 
  </form>



 </section>


 <script>

        function validation(){
    
          var Name = /^[A-Za-z]+$/;
          var firstName=document.getElementById('firstName').value;
         
         
          if(firstName==""){
                document.getElementById('user').innerHTML="Please enter Firstname";
                
            }
                if(firstName.length<2){
                    document.getElementById('user').innerHTML="atleast enter two character";
                }
                if(!isNaN(firstName)){
                    document.getElementById('user').innerHTML="please enter alphabets";
                    return false;
                }
                if(firstName.match(Name))
                true;

                else{
                    document.getElementById('user').innerHTML = "only alphabets  allowed";
                return false;
                }


              var correct_match = /^[A-Za-z._]+$/;  
              var lastName=document.getElementById('lastName').value;
         
              if(lastName==""){
                document.getElementById('last').innerHTML="Please enter Firstname";
                
            }
                if(lastName.length<2){
                    document.getElementById('last').innerHTML="atleast enter two character";
                }
                if(!isNaN(lastName)){
                    document.getElementById('last').innerHTML="please enter alphabet";
                    return false;
                }
                if(lastName.match(correct_match))
                true;

                else{
                    document.getElementById('last').innerHTML = "only alphabets  allowed";
                return false;
                }
              
         
           var email = document.myform.email.value;
            if(email.indexOf('@')<=0){
                     document.getElementById("error").innerHTML="*Invalid email*";
                       return false;
           }
           
           
           var mnumber=document.getElementById('mnumber').value;
           if(mnumber==""){
                document.getElementById('mobil').innerHTML="Please enter mobile";
            }
            if(isNaN(mnumber)){
                document.getElementById('mobil').innerHTML="Please enter number";
                return false;
            }
            if(mnumber.length<10 || mnumber.length>10){
                    document.getElementById('mobil').innerHTML="atleast enter ten number";
                    return false;
                }
            else{
                    document.getElementById('mobil').innerHTML="" ;
                }

              
                var gender = document.myform.gender;
                for(i=0; i<gender.length; i++){
                   if(gender[i].checked==true)
                       return true;
                }
                document.getElementById('gndr').innerHTML = "please select gender"
                return false;





                var check = document.myform.getElementsById('hobbies').value;
                  var checkCount = 0;
                  for (var i = 0; i < check.length; i++)
                  {
                  if (chks[i].checked)
                  {
                 checkCount++;
                  }
                     }
                 if (checkCount < 1)
                    {
                    alert("Please select at least One.");
                    return false;
                   }
                   document.getElementById('hob').innerHTML = "please select gender"
                return false;
                   
                 

            }


    

        
  </script>
</body>
</html>



