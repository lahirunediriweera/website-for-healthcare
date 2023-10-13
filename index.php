<?php
    require_once 'config.php';

    $sql = "SELECT * FROM review_web";
    $review = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medplus</title>
    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="header">

        <a href="index.php" class="logo"><i class="fas fa-heartbeat"></i> medplus</a>

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

    <section class="home" id="home">
        
        <div class="image">
            <img src="image/Blood donation-bro.svg" alt="">
        </div>

        <div class="content">
            <h3>stay safe, stay healthy</h3>
            <p>Easily generate Lorem Ipsum placeholder text in any number of characters, words sentences or paragraphs. Learn about the origins of the passage and its history, from the Roman era to today.</p>
            <a href="contact.html" class="btn"> contact us <span class="fas fa-chevron-right"></span></a>
            
        </div>

    </section>

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-user-md"></i>
            <h3>140+</h3>
            <p>doctors at work</p>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <h3>1040+</h3>
            <p>satisfied patients</p>
        </div>

        <div class="icons">
            <i class="fas fa-procedures"></i>
            <h3>50+</h3>
            <p>testing facility</p>
        </div>

        <div class="icons">
            <i class="fas fa-hospital"></i>
            <h3>20+</h3>
            <p>x-ray, ecg & other service</p>
        </div>

    </section>

    <section class="department" id="department">
        
        <div class="content">
            <h3>our departments</h3>
            <p>hospital, an institution that is built, staffed, and equipped for the diagnosis of disease; for the tre…
                To better serve the wide-ranging needs of the community, the modern hospital has often developed outpatient facilities, 
                as well as emergency, psychiatric, and rehabilitation services. In addition, “bedless hospitals” provide strictly 
                ambulatory (outpatient) care and day surgery.</p>
            <a href="department.html" class="btn"> view more <span class="fas fa-chevron-right"></span></a>
        </div>
        <div class="image">
            <img src="image/Hospital building-cuate.svg" alt="">
        </div>

    </section>

    <section class="services" id="services">

        <h1 class="heading">our <span>services</span> </h1>
        
        <div class="box-container">
        
            <div class="box">
                <i class="fas fa-notes-medical"></i>
                <h3>free checkus</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing alit,ad,omnis.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class="fas fa-ambulance"></i>
                <h3>24/7 ambulance</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing alit,ad,omnis.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class="fas fa-user-md"></i>
                <h3>expert doctors</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing alit,ad,omnis.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class="fas fa-pills"></i>
                <h3>medicines</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing alit,ad,omnis.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class="fas fa-procedures"></i>
                <h3>testing facility</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing alit,ad,omnis.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class="fas fa-heartbeat"></i>
                <h3>total care</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing alit,ad,omnis.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        
        </div>

    </section>

    <section class="about" id="about">
        
        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">
            
            <div class="image">
                <img src="image/Health professional team-rafiki.svg" alt="">
            </div>
            <div class="content">
                <h3>we take care of your healthy life</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde tempore fugit mollitia amet assumenda illum neque porro ipsum molestiae sapiente vitae, aut temporibus totam sed suscipit! Amet ea non molestias.</p>
                <a href="about.html" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>

        </div>
    
    </section>

    <section class="review" id="review">
        <h1 class="heading"><span>client's</span> review </spa></h1>
        <div class="box-container">
            <?php
            while($row = mysqli_fetch_assoc($review)){ 
            ?>
            <div class="box">
                <img src="image/<?php echo $row["picture"]; ?>" alt="">
                <h3><?php echo $row['name'] ?></h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p><?php echo $row['review'] ?></p> 
            </div>
            <?php
            }
            ?>
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
                <a href="#"><i class="fas fa-chevron-right"></i> review </a>
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
