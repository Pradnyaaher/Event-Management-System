<?php
include_once 'classes/db1.php';?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>कार्यप्रबंधन!</title>
        <title></title>
        <style>
            span.error{
                color: red;
            }   
                     
        </style>  
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
            </head>
    
    
    
            <body style="background-color: #FAE6FA; padding-top:60px;">
        
        <div class = "content"><!--body content holder-->
        <h3 style="padding-left:600px;">Login</h3>
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
               
                    <form method="POST" style="background-color: #D8D8D8; padding: 20px;"><!--form-->
                     
                            <!--username field-->
                            <label>UserName:</label><br>
        <input type="text" name="name" class="form-control" required><br>
                            
                   
        <label>Password</label><br>
        <input type="password" name="password" class="form-control" required><br>
                        <button type = "submit" name="update" class = "btn btn-info">Login</button>
                    </form>
                </div><!--col md 6 div-->
            </div><!--container div-->
        </div><!--content div-->
        
    </body>




</html>
<?php
if (isset($_POST["update"]))
{
$myusername=$_POST['name'];
$mypassword=$_POST['password'];

if($mypassword=='admin' && $myusername=='admin')
{
    echo "<script>
    alert('Login Successfull');
    window.location.href='adminPage.php';
    </script>";
}
else
{
    echo "<script>
    alert('Invalid credentials');
    window.location.href='login_form.php';
    </script>";
}
}
?>
