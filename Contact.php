<?php
@include 'config.php';

if(isset($_POST['submit'])){
    $Fname=$_POST['fname'];
    $Lname=$_POST['lname'];
    $Address=$_POST['address'];
    $Email=$_POST['email'];
    $Contact=$_POST['contactNo'];
    $Message=$_POST['message'];
   


    $select="SELECT * FROM contact WHERE Email='$Email' || ContactNo='$Contact'";

    $result=mysqli_query($con,$select);

    if(mysqli_num_rows($result)>0){
        echo"user alrady exist!";
    }
    else{
            $insert="INSERT INTO contact (FirstName,LastName,Address,Email,ContactNo,Message)
            VALUES('$Fname','$Lname','$Address','$Email','$Contact','$Message')";
           
            if(mysqli_query($con,$insert)){
                echo"new record succsessfully";
            }
            else{
                echo"try agin";
            }
        
    }
}
?>
<html>
    <head>
        <title>Contact Form</title>
        <link rel="stylesheet" href="Contact.css">
        <script type = "text/javascript" src="validation.js">
        
        function contact()
        {
         open("contact.php");
        }
        function about()
        {
         open("About_us.html");
        }
        function home()
        {
         open("PAGE1.html");
        }
    
        </script> 
        <header>
        <div class="container">
                <img src="emblem.jpg" alt="Ministry Logo" class="logo" style="width: 50px; height: 50px;">
                <h1>Ministry of Investment Promotion</h1>
                <nav>
                    <ul>
                        <li><a href="PAGE1.html" onclick="home()">Home</a></li>
                        <li><a href="About_us.html" onclick="about()">About Us</a></li>
                        <li><a href="contact.php" onclick="contact()">Contact</a></li>
                    </ul>
                </nav>
            </div>


        </header>
    </head>
    <body>
    <div class="form">
    <form name="myform" action="" method="post" onsubmit="return dovalidate()">
                <h3>Contact</h3>
                
                    
                        <label>First Name</label>
                        <input type="text" name="fname"  >
                        <br>

                        <label>Last Name</label>
                        <input type="text" name="lname">
                        <br>
                    

                    
                        <label>Address</label>
                        <input type="text" name="address">
                        <br>
                
    
                   
                        <label>Email</label>
                        <input type="email"  name="email">
                        <br>


                        <label>Contact Number</label>
                        <input type="tel" name="contactNo" placeholder="xx-xxxx-xxxx">
                        <br>

                        <label>Message</label>
                        <textarea id="contact" name="message" rows="4" cols="50">
                       
                         </textarea>
                        <br>
                        <br>

        

                    
                        
                     <input type="submit" name="submit" value="Submit" class="form-btn" id="submit">
                        
                        
                    
                
                
                
            </form>
        </div>
    </body>
</html>