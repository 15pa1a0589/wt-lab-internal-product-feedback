<?php 
       require 'config.php';
	if(isset($_POST['register'])) 
	{
         $username=$_POST['username'];
         $email=$_POST['email'];
         $password=$_POST['pass'];
         $retypepassword=$_POST['repass'];
         if($name == "" || $email == "" || $password == "" || $retypepass == "")
           $warning = "ALL THE FIELDS ARE REQUIRED";
         else 
           {
            $query=" select * from register where email=$username";
            $sql=mysqli_query($con,$query);
            if(mysqli_num_rows(sql)>0)
                echo"You have already register..Go to LOGIN";
            else
            {
                $qry = "INSERT INTO `register`(`name`, `email`, `password`,`retypepassword`) VALUES ('$name', '$email',    '$pass',$repass)";
                $sql = mysqli_query($conn,$qry);
                if($sql)
                    echo "You have successfully register";
                else
                    echo "Error occured registration.. Try again";
                  
           }
          }
         }
?>
<!DOCTYPE html>
<html>
    <head>
            <title>REGISTER</title>
            <link rel="stylesheet" href="register.css">
    </head>   
    <body>
                <h2>register</h2>
                <form class="form" method="post" action="">
                Name<input type="text" name="name"><br>
                Email<input type="text" name="email"><br>
                Password<input type="password" name="pass"><br>
                Retype Password <input type="password" name="repass"><br>
                <input type="submit" name="sub" value="Click to Submit">
            </form>
    </body>  
</html>
