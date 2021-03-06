
<?php

// used codes.php to avoid repetition of codes in other pages (eg., header, footer)

include '../data/codes.php'; // include the codes.php data

?>


<!-- HTML CODE -->
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link About UAE Page CSS -->
    <link rel="stylesheet" href="../css/AboutUAEPage.css" />

    <!-- (from codes.php) link the Touravel website icon -->
    <?php echo $touravel_icon_general ?>

    <!-- entitle the page to Touravel - Our Story -->
    <title>Touravel - About UAE</title>

</head>
<body style="background-color: black; color: white;">

    <!-- (from codes.php) include the header code -->
    <?php echo $header_general ?>

    <div class="title_container">
        <h5>HOW WELL DO YOU KNOW</h5>
        <h1>UNITED ARAB EMIRATES</h1>
        <p>
            To test your knowledge about UAE, we prepared an easy
            and fun quiz for you!
        </p>
        <a href="Quiz.php">TAKE QUIZ</a> <!-- take quiz button -->
    </div>

    <div class="subheading">
        <h3>ALL ABOUT THE UNITED ARAB EMIRATES</h3>
    </div>

    <div class="UAE_facts">
        <img src="../images/didyouknow.png" />

        <div class="national left">
            <div class="img_wrap">
                <img src="../images/national_attire.png" />
            </div>
            <div class="national_desc">
                <h3 class="reveal right">NATIONAL ATTIRE</h3>
                <p class="reveal right">
                    Emerati clothing is a point of national pride, and a symbol of the history, culture and religion of the United Arab Emirates.
                    Emirati men wear a long, single robe called a dishdasha or kandura. In contrast to the lighter colours worn by men, Emirati women
                    wear a long flowing gown in black. This is known as the abaya and is worn over everyday clothes for modesty.
                </p>
            </div>
        </div>

        <div class="national right">
            <div class="img_wrap">
                <img src="../images/national_animal.png" />
            </div>
            <div class="national_desc">
                <h3 class="reveal left">NATIONAL ANIMAL</h3>
                <p class="reveal left">
                    Arabian Oryx is the United Arab Emirates' official national animal. It is the largest mammal that lives in the deserts of Arab regions.
                    This animal is a desert antelope well suited to its rugged wilderness. Her glossy white coat represents the sun's light, and her hooves
                    look like a paddle and stretch out, which allows the animal a wide field while walking on the sandy dirt. These animals are renowned for
                    their endurance and grace and inspire Arab poets.
                </p>
            </div>
        </div>

        <div class="national left">
            <div class="img_wrap">
                <img src="../images/national_fruit.png" />
            </div>
            <div class="national_desc">
                <h3 class="reveal right">NATIONAL FRUIT</h3>
                <p class="reveal right">
                    The national fruit of UAE is the dates that are grown in abundance, it is most like by Arabs. Dates have a religious significance in the
                    Islamic world as our prophet HAZARD Mohammad must break his fast by eating dates. Arab people like different varieties of dates available
                    in UAE also export dates to many other countries. Dates are also mentioned in the Holy Quran at least 20 times.
                </p>
            </div>
        </div>

        <div class="national right">
            <div class="img_wrap">
                <img src="../images/national_bird.png" />
            </div>
            <div class="national_desc">
                <h3 class="reveal left">NATIONAL BIRD</h3>
                <p class="reveal left">
                    The national bird of UAE is the falcons that are a fast-flying hunter and confine its prey in the air. It rated at the top position of the
                    biological pyramid. Falcon mostly kills its prey with its beak it has sharp claws that help to strike or grasp its prey. The national bird
                    shows strength, courage, and force. In Arab tradition, it is regarded as a shy and uncommon bird but now it is seriously facing ecological
                    risks. Falcons commonly founded at great heights so to observe the falcon for a long time is quite difficult.
                </p>
            </div>
        </div>
    </div>

    <div class="subheading">
        <h3>ARTICLES ABOUT THE UNITED ARAB EMIRATES</h3>
    </div>

    <div class="article right">
        <div class="text reveal right">
            <h1>HOW TO GET UAE TOURIST VISA</h1>
            <p>
                By: UAE Government
            </p>
            <a href="https://u.ae/en/information-and-services/visiting-and-exploring-the-uae/tourist-visa#:~:text=Depending%20on%20your%20plan%2C%20tourist,need%20to%20leave%20the%20country" target="_blank">Visit Article ></a>
        </div>

        <img src="../images/tourist_visa.png" />
    </div>

    <div class="article left">
        <div class="text reveal left">
            <h1>BEST HOTELS IN UNITED ARAB EMIRATES</h1>
            <p>
                By: The Telegraph
            </p>
            <a href="https://www.telegraph.co.uk/travel/destinations/middle-east/united-arab-emirates/hotels/" target="_blank">Visit Article ></a>
        </div>

        <img src="../images/best_hotels.png" />
    </div>

    <div class="article right">
        <div class="text reveal right">
            <h1>FOOD OF UAE - 21 EMIRATI DISHES TO ADD TO YOUR CHECKLIST WHEN IN THE UAE</h1>
            <p>
                By: Holidify
            </p>
            <a href="https://www.holidify.com/pages/food-of-uae-2574.html" target="_blank">Visit Article ></a>
        </div>

        <img src="../images/best_foods.png" />
    </div>

    <div class="article left">
        <div class="text reveal left">
            <h1>14 TOP-RATED ATTRACTIONS IN UAE</h1>
            <p>
                By: Jess Lee
            </p>
            <a href="https://www.planetware.com/tourist-attractions/united-arab-emirates-uae.htm" target="_blank">Visit Article ></a>
        </div>

        <img src="../images/best_attractions.png" />
    </div>

    <div class="article right">
        <div class="text reveal right">
            <h1>7 ADVENTURE ACTIVITIES TO TRY IN THE UAE</h1>
            <p>
                By: Time Out
            </p>
            <a href="https://www.timeoutabudhabi.com/sports-wellbeing/455909-the-best-extreme-activities-in-the-uae" target="_blank">Visit Article ></a>
        </div>

        <img src="../images/best_adventures.png" />
    </div>

    <?php echo $footer_general ?>

    <!-- Link the Reveal Animations Script  -->
    <script src="../javascript/Reveal_Animations_Script.js"></script>
</body>
</html>
