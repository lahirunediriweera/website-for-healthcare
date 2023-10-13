<?php
session_start();
@include 'config.php';

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $review = $_POST['review'];
     
        if(empty($name) || empty($email) || empty($review)){
           $message[] = 'please fill out all';
        }else{
           $insert = "INSERT INTO review (name, email, review) VALUES('$name', '$email', '$review')";
           $upload = mysqli_query($conn,$insert);
           if($upload){
              $message[] = 'New Staff Member Added Successfully';
           }else{
              $message[] = 'could not add Successfully';
           }
        }
     
     };
    
    ?>   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medplus/Review</title>
    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .about .row{
            padding-top: 5rem;
        }
    </style>
</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>

    <header class="header">

        <a href="#" class="logo"><i class="fas fa-heartbeat"></i> medplus</a>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="department.php">departments & testing</a>
            <a href="services.php">services</a>
            <a href="about.php">about</a>
            <a href="doctor.php">doctors</a>
            <a href="channel.php">channeling</a>
            <a href="review.php">review</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>

    <section class="about" id="about">
        
        <div class="row">
            
            <div class="image">
                <img src="image/Online Review-pana.svg" alt="">
            </div>
            <div class="content">
                <h1 class="heading"> re<span>view</span></h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut amet, molestiae nostrum architecto commodi suscipit accusantium quasi labore quia qui quisquam illum illo adipisci aperiam ducimus dignissimos, similique expedita blanditiis!</p>
            </div>

        </div>
        
    </section>

    <section class="reviewform" id="reviewform">
        <div class="content">
            <h1 class="heading">give <span> review </span> for <span>us</span></h1>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <input type="text" placeholder="your name" name="name" class="box" required>
                <input type="email" placeholder="your email" name="email" class="box" required>
                <textarea name="review" placeholder="Your review" class="box" required></textarea>
                <input type="reset" value="reset" class="btn">
                <input type="submit" name="submit" value="submit" class="btn">
            </form>
        </div>
    </section>

    <section class="footer" id="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="#"><i class="fas fa-chevron-right"></i> home </a>
                <a href="#"><i class="fas fa-chevron-right"></i> departments </a>
                <a href="#"><i class="fas fa-chevron-right"></i> services </a>
                <a href="#"><i class="fas fa-chevron-right"></i> about </a>
                <a href="#"><i class="fas fa-chevron-right"></i> doctors </a>
                <a href="#"><i class="fas fa-chevron-right"></i> channeling </a>
                <a href="#review"><i class="fas fa-chevron-right"></i> review </a>
            </div>

            <div class="box">
                <h3>our services</h3>
                <a href="#"><i class="fas fa-chevron-right"></i> dental care </a>
                <a href="#"><i class="fas fa-chevron-right"></i> message therapy </a>
                <a href="#"><i class="fas fa-chevron-right"></i> cardiology </a>
                <a href="#"><i class="fas fa-chevron-right"></i> diagnosis </a>
                <a href="#"><i class="fas fa-chevron-right"></i> ambulance service </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +94-112559090 </a>
                <a href="#"><i class="fas fa-phone"></i> +94-112449090 </a>
                <a href="#"><i class="fas fa-envelope"></i> medplus@outlook.com </a>
                <a href="#"><i class="fas fa-envelope"></i> medplus@gmail.com </a>
                <a href="#"><i class="fas fa-map-marker-alt"></i> colombo 7, sri lanka </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"><i class="fab fa-twitter"></i> twitter </a>
                <a href="#"><i class="fab fa-instagram"></i> instagram </a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin </a>
                <a href="#"><i class="fab fa-pinterest"></i> pinterest </a>
            </div>
        </div>

        <div class="credit"> @ copyright ELN Designs 2023. designed and developed by<span class="fname"> eln </span> <span class="lname"> designs. </span> </div>
    </section>

    <script src="js/script.js"></script>
    

</body>
</html>