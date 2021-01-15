<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="formstyle.css">
    </head>
    <body>
    <section class="adj-header">
    <div class="header">
      <a class="logoh">Take A Trip</a>
      <div class="header-right">
        <a onclick="myFunction2()">Home</a>
        <script>
          function myFunction2() {
            window.location = "index.html";
          }
        </script>
        <a href="#special packages">Special Packages</a>
        <a href="#Travel Destination">Travel Destination</a>
        <a href="#contact us">Contact Us</a>
        <a href="#photo galary">Photo Galary</a>
        <a href="Our policy">Our Policy</a>
        <a href="about us">About Us</a>
        <br><br><br>
      </div>
    </div>
    </section>


    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fullname =$_POST['fullname'];
        $phonenumber =$_POST['phonenumber'];
        $email = $_POST['email'];
        $traveldes =$_POST['traveld'];
        $package =$_POST['package'];
        $traveldate =$_POST['traveldate'];
        $address =$_POST['address'];
        $transactionid= $_POST['transactionid'];
        
      // Submit these to a database

      //connection to database

      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "reservation";

      //create connection

      $conn = mysqli_connect($servername, $username, $password, $database);

      if(!$conn){
          die("Connection Failed: " .mysqli_connect_error());
      }
      else{
          
          // Submit these to a database
        // Sql query to be executed 
        $sql= "INSERT INTO `reservation` (`fullname`, `phoneno`, `email`, `traveldestination`, `package`, `traveldate`, `address`, `transactionid`) VALUES ('$fullname', '$phonenumber', '$email', '$traveldes', '$package', '$traveldate', '$address', '$transactionid')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
        
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
      }




    }

    
?>
    <div class="adjustment">
        <div class="register">
            <h1 style="color: orangered;">Reserve Your Trip Now!</h1><br><br>
            <form action="/Form_creation/myform.php" method="post">
            <p class="text">Full Name</p>
            <input class="input-style" type="text" name="fullname" id="fullname" placeholder="e.g: Ahmad Fahim"><br><br>
           <p class="text">Phone Number</p>
            <input class="input-style" type="text" name="phonenumber" id="phonenumber" placeholder="e.g: 019XXXXXX880"><br><br>
            <p class="text">Email</p>
            <input class="input-style" type="Email" name="email" id="email" placeholder="e.g: habib@gmail.com"><br><br>
            <p class="text">Travel Destination</p>
            <input class="input-style" type="text" name="traveld" id="traveld" placeholder="e.g: Sajek"><br><br>
            <p class="text">Package</p>
            <input class="input-style" type="text" name="package" id="package" placeholder="e.g: Super Deluxe / Deluxe/ Standard"><br><br>
            <p class="text">Travel Date</p>
            <input class="input-style" type="text" name="traveldate" id="traveldate" placeholder="e.g: 02-01-2021"><br><br>
            <p class="text">Address</p>
            <input class="input-style" type="text" name="address" id="address" placeholder="e.g: Uttara, Sector-6, Dhaka"><br><br>
            <p class="text">Transaction Id & Amount</p>
            <input class="input-style" type="text" name="transactionid" id="transactionid" placeholder="e.g: w3t44x21 & 1500tk"><br><br>
            <button class="signup-button">Submit</button>
            </form>
            
            <p class="text1">By clicking "Submit" I agree to accept all Privacy Policy</p><br><br>
            <p class="text1">Or "Contact Us" Through</p><br><br>
            <div class="third-party-signup">
                <a href=""><button class="fb-button">Facebook</button></a>
                <a href=""><button class="google-button">Gmail</button></a>

            </div><br><br>
            <p style="color: red;">For more enquary call us at 01300210082.</p>

        </div>
        </div>

         <!-- footer start -->
      <section class="color-name">
    <div class="footer">
      <h1 style="text-align: center; color: white">Follow Us</h1>
      <div class="logo">
        <a href="www.facebook.com"
          ><img
            style="height: 40px; width: 40px; padding: 5px"
            src="images/facebook.png"
            alt="facebook"
        /></a>
        <a href="#whatsapp"
          ><img
            style="height: 40px; width: 40px; padding: 5px"
            src="images/whatsapp.png"
            alt="facebook"
        /></a>
        <a href="#instagram"
          ><img
            style="height: 40px; width: 40px; padding: 5px"
            src="images/instagram.png"
            alt="facebook"
        /></a>
        <a href="#twitter"
          ><img
            style="height: 40px; width: 40px; padding: 5px"
            src="images/twitter.png"
            alt="facebook"
        /></a>
      </div>
      <br />
      <div class="footer-text">
        <div class="footer-text1">
          <h3>Contact Us</h3>
          <pre>
Office Address:4th Floor,Nurmahal Complex.
                 Dewanhat Chittagong.</pre
          >
          <p>Mail: <a href="#trip">takeatrip@gmail.com</a></p>
          <p>Fax: 0093111</p>
          <p>Mobile No: 01301002214</p>
        </div>
        <div class="footer-text2">
          <h3>About Us</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio id
            debitis quidem
          </p>
        </div>
      </div>

      <div class="Copyright">
        <p style="text-align: center">Copyright &copy; 2020 Ahmad Fahim & Habibullah Asif</p>
      </div>
    </div>
    </section>
       
    </body>
</html>