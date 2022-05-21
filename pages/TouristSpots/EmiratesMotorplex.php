
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

    <!-- entitle the page to Touravel - Emirates Motorplex -->
    <title>Touravel - Emirates Motorplex</title>

</head>
<body>

    <!-- EMIRATES MOTORPLEX TITLE CONTAINER (each tourist spot title container has unique bg image, therefore I used inline css) -->
    <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)), url('../../images/emiratesmotorplex_bg.png');">

        <!-- Go Back Button -->
        <button onclick="history.back()">Go Back</button>

        <!-- Download PDF Button -->
        <a href="../../pdf/5 UAQ/UAQ 3 Emirates Motorplex.pdf" download class="download"><img src="../../images/downloadpdf_button.png" /></a>

        <!-- Touravel Logo -->
        <a class="logo" href="../Touravel_OurStory.php"><img src="../../images/Touravel_Logo-white.png" /></a>

        <!-- Tourist Spot Title Text -->
        <h1>EMIRATES MOTORPLEX</h1>

        <!-- Tourist Spot Description -->
        <p>
            Racing lovers will probably find this place according to their desires. There are many opportunities available to have adventure in this field. 
            The surrounding and settings for the racing are outstanding which make the environment thrilling and amazing. There are five tracks for every kind 
            of racing. The category of racing includes quad bikes, drag cars, motocross and endurance race cars. You need to register yourself in order to watch 
            or participate in races.
        </p>

        <!-- Visit Website Button -->
        <a class="website" href="https://motorplex.ae/" target="_blank">Visit Website</a>
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
                    9AM-3PM<br />
                    9AM-3PM<br />
                    9AM-3PM<br />
                    CLOSED <br />
                    CLOSED <br />
                    9AM-3PM<br />
                    9AM-3PM<br />
                </h3>

                <!-- Tourist Spot Image -->
                <img src="../../images/emiratesmotorplex_OH.png" />
            </div>

            <!-- Tourist Spot Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13383.502989573119!2d55.661261!3d25.5741561!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x54d68d93b50c64c6!2sEmirates%20Motorplex!5e1!3m2!1sen!2sae!4v1652995173226!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- DININGS NEAR THE AREA CONTAINER -->
    <div class="dinings">

        <!-- Dinings near the area Title Text -->
        <h1 class="reveal up">DININGS NEAR THE AREA</h1>

        <!-- Dining Title -->
        <h2 class="reveal up">thunder road barracuda</h2>

        <!-- Dining Description -->
        <p class="reveal up">
            Located in Barracuda beach Resort the restaurant offers homemade Italian cuisine with American twist coupled with stunning sea view.
        </p>

        <!-- Dining Content Box -->
        <div class="dinings_content">

            <!-- Dining Restaurant Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3345.4993522595323!2d55.65002491501739!3d25.587621183716035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef5fd20ac4e4eff%3A0x5636c7b0b744a2f3!2sThunder%20Road%20Barracuda!5e1!3m2!1sen!2sae!4v1652995195131!5m2!1sen!2sae" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Dining Restaurant Image -->
            <img src="../../images/thunder_road.png" />
        </div>
    </div>

    <!-- WELL KNOWN ACTIVITIES CONTAINER -->
    <div class="activities">

        <!-- Well known activities Title Text -->
        <h1 class="reveal up">WELL-KNOWN ACTIVITIES</h1>

        <!-- Activities Content Box -->
        <div class="activities_content">

            <!-- Activities Image -->
            <img src="../../images/emiratesmotorplex_WLA.png" />

            <!-- Activities Details -->
            <div class="activities_details">

                <!-- Activities List Text -->
                <h3>
                    Sightseeing
                    <br /><br />
                    Racing show
                    <br /><br />
                    Photography
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