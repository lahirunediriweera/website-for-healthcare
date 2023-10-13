<?php
session_start();
@include 'config.php';

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $test = $_POST['test'];
        $date = $_POST['date'];
     
        if(empty($name) || empty($email) || empty($contact || empty($reason) || empty($date) )){
           $message[] = 'please fill out all';
        }else{
           $insert = "INSERT INTO testing (name, contact, email, test, date) VALUES('$name', '$contact', '$email', '$test', '$date')";
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
    <title>Medplus/Departments & Testing</title>
    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .about .row{
            padding-top: 5rem;
        }
        .about .row .content h1{
            font-size: 4.8rem;
        }
        .depinfo .row .content h1{
            font-size: 4rem;
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
                <img src="image/Hospital building-rafiki.svg" alt="">
            </div>
            <div class="content">
                <h1 class="heading"> our <span>departments</span></h1>
                <p>Hospital is an integration of several departments such as clinical departments, nursing departments, supportive departments, technical departments and administrative departments. Each department has different purposes and requirements in a hospital. The list of different departments in a hospital are as follows... </p>
            </div>

        </div>
        
    </section>

    <section class="channel" id="channel">

        <h1 class="heading">reserve for<span> testings </span></h1>
        
        <div class="row">
           
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="your name" class="box" required>
                <input type="tel" name="contact" placeholder="your contact number" class="box" required>
                <input type="email" name="email" placeholder="your email" class="box" required>
                <input type="text" name="test" placeholder="Enter type test" class="box" required>
                <input type="date" name="date" class="box">
                <input type="reset" value="reset" class="btn">
                <input type="submit" name="submit" value="reserve now" class="btn">
            </form>
            <div class="image">
                <img src="image/Online Doctor-rafiki.svg" alt="">
            </div>
        </div>
    </section>
    
    <section class="depinfo" id="depinfo">

        <div class="row">
             
            <div class="content">
                <h1 class="heading"> Intensive Care Unit <span>(ICU)</span></h1>
                <ol>
                    <li>Intensive care unit is also known as critical care unit (CCU), intensive treatment unit (ITU) or intensive therapy unit.</li>
                    <li>Intensive care unit deals with life-threatening or severe injuries and illnesses that require close monitoring from life support devices, constant care.</li>
                    <li>In ICU, patients are monitored and staffed by highly trained physicians, nurses and respiratory therapists.</li>
                </ol>
            </div>
            <div class="image">
                <img src="image/CT scan-pana.svg" alt="">
            </div>

        </div>
        <div class="row">
             
            <div class="content">
                <h1 class="heading"> Operating Theatre <span>(OT)</span></h1>
                <ol>
                    <li>Operating theatre is also known as operating room or operating suite or operation suite.</li>
                    <li>OT deals with surgical operations where surgeons perform surgery in an aseptic environment.</li>
                    <li>OT rooms have well lighting, controlled humidity and temperature.</li>
                </ol>
            </div>

        </div>
        <div class="row">
             
            <div class="content">
                <h1 class="heading"> Cardiology <span>department</span></h1>
                <ol>
                    <li>Cardiology department deals with the human heart and circulation problems.</li>
                    <li>It provides services on an inpatient and outpatient basis.</li>
                    <li>In this department, a cardiologist prescribes some tests and some procedures are performed such as angioplasty, inserting a pacemaker, atherectomy, heart catheterization, stent implantation etc.</li>
                </ol>
            </div>

        </div>
        <div class="row">

            <div class="image">
                <img src="image/Medicine-amico.svg" alt="">
            </div> 
            <div class="content">
                <h1 class="heading"> general surgery <span>unit</span></h1>
                <ol>
                    <li>In this department perform various surgical procedures.</li>
                    <li>Some of the common surgical procedures performed are thyroid surgery, colon surgery, gall bladder surgery, breast surgery etc.</li>
                </ol>
            </div>
            
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