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
        .icons-container{
            display: grid;
            gap: 2rem;
            grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        .icons-container .iconss{
            border: var(--border);
            box-shadow: var(--box-shadow);
            border-radius: .5rem;
            text-align: center;
            padding: 2.5rem;
        }

        .icons-container .iconss i{
            font-size: 2.5rem;
            color: var(--green);
            padding-bottom: .7rem;
        }

        .icons-container .iconss h4{
            font-size: 1.5rem;
            color: var(--black);
            padding: .5rem 0;
            text-align: center;
        }
    </style>
</head>
<body>
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
                <img src="image/Get in touch-bro.svg" alt="">
            </div>
            <div class="content">
                <h1 class="heading"> contact <span>us</span></h1>
                <section class="icons-container">

                    <div class="iconss">
                        <h4><i class="fas fa-map-marker-alt"></i><br>colombo 7, sri lanka</h4>
                    </div>
                    <div class="iconss">
                        <h4><i class="fas fa-envelope"></i><br>medplus@gmail.com</h4>
                    </div>
                    <div class="iconss">
                        <h4><i class="fas fa-phone"></i><br>+94-112559090</h4>
                    </div>
                    <div class="iconss">
                        <h4><i class="fas fa-phone"></i><br>+94-112449090</h4>
                    </div>
                    
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