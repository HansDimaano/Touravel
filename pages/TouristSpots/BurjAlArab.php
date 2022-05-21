
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

    <!-- entitle the page to Touravel - Burj Al Arab -->
    <title>Touravel - Burj Al Arab</title>

</head>
<body>

    <!-- BURJ AL ARAB TITLE CONTAINER (each tourist spot title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../../images/burjalarab_bg.png');">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Download PDF Button -->
        <a href="../../pdf/2 DXB/DXB 2 Burj Al Arab.pdf" download class="download"><img src="../../images/downloadpdf_button.png" /></a>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../../images/Touravel_Logo-white.png" /></a>

        <!-- Tourist Spot Title Text -->
        <h1>BURJ AL ARAB</h1>

        <!-- Tourist Spot Description -->
        <p>
            Burj Al Arab Jumeirah is undoubtedly one of the most famous
            landmarks and tourist attractions in Dubai, and is renowned for its 'seven-star status'. The luxury all-suite hotel includes a range of 
            finedining restaurants, incredible beaches, and the expansive Burj Al Arab Terrace. The Burj Al Arab has played host to a covetable guest list of
            VIPs and celebrities from all over the world, helping put Dubai on the building rises 321m, providing guests an amazing hotel room view of the Arabian Gulf.

        </p>

        <!-- Visit Website Button -->
        <a class="website" href="https://www.jumeirah.com/en/offers/category-offers/stay/burj-al-arab-jumeirah/exclusive-uae-residents-offer?gclsrc=aw.ds&ds_rl=1269541&ds_rl=1269541&gclid=CjwKCAjw8sCRBhA6EiwA6_IF4WZBq36sg6J8Fl0aj1LmgSoljdtjAThnmvWjRhp9Ijq7zSsxw9qwQBoCxGAQAvD_BwE&gclsrc=aw.ds" target="_blank">Visit Website</a>
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
                    OPEN 24 HOURS<br />
                    OPEN 24 HOURS<br />
                    OPEN 24 HOURS<br />
                    OPEN 24 HOURS<br />
                    OPEN 24 HOURS<br />
                    OPEN 24 HOURS<br />
                    OPEN 24 HOURS<br />
                </h3>

                <!-- Tourist Spot Image -->
                <img src="../../images/burjalarab_OH.png" />
            </div>

            <!-- Tourist Spot Google Map -->
           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13431.519903166418!2d55.1852468!3d25.1411914!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb3da71b879f0e038!2sBurj%20Al%20Arab!5e1!3m2!1sen!2sae!4v1652976720299!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
    </div>


    <!-- DININGS NEAR THE AREA CONTAINER -->
    <div class="dinings">

        <!-- Dinings near the area Title Text -->
        <h1 class="reveal up">DININGS NEAR THE AREA</h1>

        <!-- Dining Title -->
        <h2 class="reveal up">culinary flight at burj al arab</h2>

        <!-- Dining Description -->
        <p class="reveal up">
            The Culinary Flight at Burj Al Arab Jumeirah is one of those once in a lifetime experiences that would make a perfect gift for the foodie in your life.
        </p>

        <!-- Dining Content Box -->
        <div class="dinings_content">

            <!-- Dining Restaurant Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13431.498174546374!2d55.1855556!3d25.1413889!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5d72108f5cb0fcb6!2sCulinary%20Flight%20at%20Burj%20Al%20Arab!5e1!3m2!1sen!2sae!4v1652977015262!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Dining Restaurant Image -->
            <img src="../../images/culinary_flight.png" />
        </div>
    </div>

    <!-- WELL KNOWN ACTIVITIES CONTAINER -->
    <div class="activities">

        <!-- Well known activities Title Text -->
        <h1 class="reveal up">WELL-KNOWN ACTIVITIES</h1>

        <!-- Activities Content Box -->
        <div class="activities_content">

            <!-- Activities Image -->
            <img src="../../images/burjalarab_WLA.png" />

            <!-- Activities Details -->
            <div class="activities_details">

                <!-- Activities List Text -->
                <h3>
                    Photoshoot
                    <br /><br />
                    Check-in and explore
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