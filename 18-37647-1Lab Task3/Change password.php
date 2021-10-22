<?php

    $pass="";
    $err_pass="";
    
    $cpass="";
    $err_cpass="";
    
    $npass="";
    $err_npass="";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        if(empty($_POST["pass"])){
            $hasError = true;
            $err_pass = "Password Required";
        }

        else{
            $pass = $_POST["pass"];
        }
        
        if(empty($_POST["cpass"])){
            $hasError = true;
            $err_cpass = "Confirm Password Required";
        }
        elseif ($_POST["cpass"] !== $_POST["pass"]){
            $hasError = true;
            $err_cpass = "Confirm Password Required";
        }
        else{
            $cpass = $_POST["cpass"];
        }
        
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){   
        if(!strpos($_POST["npass"],"@"))
            {
                if(!strpos($_POST["npass"],"#"))

                $hasError=true;
                $err_npass="your password is not in correct format!";
                }

            else
                {
                    $npass=$_POST["npass"];
                }
        
    }
        
        echo "Password:".htmlspecialchars($_POST["pass"])."<br>";
        }
    


?>
<html>
    <head></head>
    <body>
        
        <form action="" method="post">
        <fieldset>
        <legend align="left"><h1><b>Change Password</b></h1></legend>
            <table>
            
                <tr>
                    <td><span>Current Password:</span></td>
                    <td></td>
                    <td><input type="password" name="npass" value="<?php echo $npass;?>"> </td><td><span><?php echo $err_npass;?></span></td>
                </tr>
            
                <tr>
                    <td><span>New Passwoed:</span></td>
                    <td></td>
                    <td><input type="password" name="pass" value="<?php echo $pass;?>"> </td><td><span><?php echo $err_pass;?></span></td>
                </tr>
                <tr>
                    <td><span>Retype New Password:</span></td>
                    <td></td>
                    <td><input type="Password" name="cpass" value="<?php echo $cpass;?>"> </td><td><span><?php echo $err_cpass;?></span></td>
                </tr>
                
                
                
            </table>
            <hr>
            <table>
            <td >               
                <input type="Submit" name="submit" value="Submit">
            </td>
            </table>    
    </fieldset>
        </form>
        
    </body>
</html>