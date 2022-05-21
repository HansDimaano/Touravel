
<?php

// used codes.php to avoid repetition of codes in other pages (eg., header, footer)

include '../../data/codes.php'; // include the codes.php data

?>


<!-- HTML CODE -->
<html>
<head>

    <!-- to make the website look good in all devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link Tourist Spot Pages CSS -->
    <link rel="stylesheet" href="../../css/TouristSpotPages.css" />

    <!-- (from codes.php) link the Touravel website icon -->
    <?php echo $touravel_icon_touristspots ?>

    <!-- entitle the page to Touravel - Sheikh Zayed Grand Mosque -->
    <title>Touravel - Al Zorah Natural Reserve</title>

</head>
<body>

    <!-- AL ZORAH NATURAL PRESERVE TITLE CONTAINER (each tourist spot title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../../images/alzorah_bg.png');">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Download PDF Button -->
        <a href="../../pdf/4 AJM/AJM 1 Al Zorah.pdf" download class="download"><img src="../../images/downloadpdf_button.png" /></a>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../../images/Touravel_Logo-white.png" /></a>

        <!-- Tourist Spot Title Text -->
        <h1>AL ZORAH NATURE PRESERVEE</h1>

        <!-- Tourist Spot Description -->
        <p>
            The Al Zorah Nature Reserve is a thriving ecosystem of mangroves, turquoise lagoons, and sandy beaches that is home to nearly 58 
            different bird species, including pink flamingos, egrets, and herons.
        </p>

        <!-- Visit Website Button -->
        <a class="website" href="http://www.alzorah.ae/the-project/activities/" target="_blank">Visit Website</a>
    </div>


    <!-- OPENING HOURS CONTAINER -->
    <div class="opening_hours">

        <!-- Opening Hours Heading -->
        <h1 class="reveal up">OPENING HOURS</h1>

        <!-- Opening Hours Content Box -->
        <div class="opening_content">

            <!-- Opening Hours Details -->
            <div class="opening_details">

                <!-- Days Text -->
                <h3 class="day">
                    TUESDAY<br />
                    WEDNESDAY<br />
                    THURSDAY<br />
                    FRIDAY<br />
                    SATURDAY<br />
                    SUNDAY<br />
                    MONDAY<br />
                </h3>

                <!-- Time Text -->
                <h3 class="time">
                    9AM-6PM<br />
                    9AM-6PM<br />
                    9AM-6PM<br />
                    9AM-6PM<br />
                    9AM-6PM<br />
                    9AM-6PM<br />
                    9AM-6PM<br />
                </h3>

                <!-- Tourist Spot Image -->
                <img src="../../images/alzorah_OH.png" />
            </div>

            <!-- Tourist Spot Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13399.978479295036!2d55.4991327!3d25.4263738!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa3167c55408c7390!2sAl%20Zorah%20Natural%20Reserve%20-%20Ajman!5e1!3m2!1sen!2sae!4v1652990996905!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- DININGS NEAR THE AREA CONTAINER -->
    <div class="dinings">

        <!-- Dinings near the area Title Text -->
        <h1 class="reveal up">DININGS NEAR THE AREA</h1>

        <!-- Dining Title -->
        <h2 class="reveal up">shakespeare and co</h2>

        <!-- Dining Description -->
        <p class="reveal up">
            Shakespeare and Co. is a place where you can go to with friends, colleagues, family, a laptop, or even a book to enjoy a good meal and relax, 
            knowing there's always something to look forward to on the menu, and an ambiance so comfortable.
        </p>

        <!-- Dining Content Box -->
        <div class="dinings_content">

            <!-- Dining Restaurant Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13399.991176409765!2d55.4980994!3d25.4262596!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x24b40b4fe5bb5776!2sShakespeare%20and%20co!5e1!3m2!1sen!2sae!4v1652991118380!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Dining Restaurant Image -->
            <img src="../../images/shakespeare_co.png" />
        </div>
    </div>

    <!-- WELL KNOWN ACTIVITIES CONTAINER -->
    <div class="activities">

        <!-- Well known activities Title Text -->
        <h1 class="reveal up">WELL-KNOWN ACTIVITIES</h1>

        <!-- Activities Content Box -->
        <div class="activities_content">

            <!-- Activities Image -->
            <img src="../../images/alzorah_WLA.png" />

            <!-- Activities Details -->
            <div class="activities_details">

                <!-- Activities List Text -->
                <h3>
                    KAYAK TOURS
                    <br /><br />
                    NORDIC STAR CHARTERS (Luxury Yacht)
                    <br /><br />
                    WAKE PARK
                    <br /><br />
                    WATER SPORTS CENTER
                    <br /><br />
                    SEAPLANE TOURS
                </h3>
            </div>
        </div>
    </div>

    <!-- (from codes.php) include the footer code for tourist spots -->
    <?php echo $footer_touristspots ?>

    <!-- Link the Reveal Animations Script  -->
    <script src="../../javascript/Reveal_Animations_Script.js"></script>
</body>
</html>