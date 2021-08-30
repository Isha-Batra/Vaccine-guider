
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccine Provider Guide</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>
    <header class="header">
        <div class="left">
            <!-- left box for logo -->
            <img src="logo.jpg" alt="">
            <div>vaccination</div>
        </div>
        <div class="icon-bar">
            <a class="active" href="#"><i class="fa fa-home"></i></a> 
            <a href="symptoms.html"><i class="fa fa-thermometer"></i></a> 
            <a href="prevention.html"><i class="fa fa-shield"></i></a> 
            <a href="Aboutus (1).html"><i class="fa fa-child"></i></a>
            <a href="contactus.html"><i class="fa fa-phone"></i></a> 
          </div>
        <div class="icon-bar2">
            
            <a href="login.php"><i class="fa fa-address-book"></i></a>
            <a href="#"><i class="fa fa-envelope"></i></a> 
        </div>
    </header>
   
    <div class="container">
        <h1>Vaccine Mode:ON</h1>
        <form action="back.php" method="post">
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter your Name">
            </div>
            <div class="form-group">
                <input type="text" name="age" placeholder="Enter your Age">
            </div>
            <div class="form-group">
                <input type="text" name="gender" placeholder="Enter your Gender">
            </div>
            <div class="form-group">
                <input type="text" name="adhno" placeholder="Enter your Aadhar Number">
                
            </div>
            <div class="form-group">
                <input type="text" name="locality" placeholder="Enter your Locality">
            </div>
            <div class="form-group">
                <input type="text" name="email" placeholder="Enter your Email Id">
            </div>
            <div class="form-group">
                <input type="text" name="phone" placeholder="Enter your Phone Number">
            </div>
           
            <button class="btn" name="done">Submit</button>
        </form>
    </div>
  
</body>

</html>
