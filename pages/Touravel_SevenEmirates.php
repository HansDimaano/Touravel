
<?php

// used codes.php to avoid repetition of codes in other pages (eg., header, footer)

include '../data/codes.php'; // include the codes.php data

?>


<!-- HTML CODE -->
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link Seven Emirates Page CSS -->
    <link rel="stylesheet" href="../css/SevenEmiratesPage.css" />

    <!-- (from codes.php) link the Touravel website icon -->
    <?php echo $touravel_icon_general ?>

    <!-- entitle the page to Touravel - Our Story -->
    <title>Touravel - Seven Emirates</title>

</head>
<body>

    <!-- (from codes.php) include the header code -->
    <?php echo $header_general ?>

    <div class="title_container">
        <img src="../images/sevenemirates_map.png" />

        <div class="aboutUAE">
            <h3>United Arab Emirates</h3>
            <p>
                This little country in the Persian Gulf is home to the world's tallest structure, some of the world's most expensive hotels,
                and a unique blend of tradition and novelty not found in many other countries.
                <br /><br />
                The best reasons to visit the UAE may be found in each of its seven Emirates, each of which has its own distinct experience to offer.
            </p>
        </div>
    </div>

    <div class="emirate left">
        <div class="text reveal left">
            <h1>Abu Dhabi</h1>
            <p>
                Abu Dhabi includes 80 percent of the United Arab Emirates, stretching from the Arabian Gulf coast to the cultural center of Al Ain
                and the spectacular desert environment of the Al Dhafra Region. The emirate has something for every tourist, with its natural islands
                and calm oasis.
            </p>
            <a>EXPLORE</a>
        </div>

        <img src="../images/abudhabi_tts.png" />
    </div>

    <div class="emirate right">
        <div class="text reveal right">
            <h1>Dubai</h1>
            <p>
                Dubai has quickly become one of the world's most popular tourist destinations, owing to its international reputation as a thriving center of
                international trade and innovation. Only in Dubai can you see and climb the world's tallest freestanding construction (the Burj Khalifa)
            </p>
            <a>EXPLORE</a>
        </div>

        <img src="../images/dubai_tts.png" />
    </div>

    <div class="emirate left">
        <div class="text reveal left">
            <h1>Sharjah</h1>
            <p>
                Sharjah is known for its dedication to art, culture, and historical preservation. It was named the Cultural Capital of the Arab World by UNESCO
                in 1998. The city has risen to prominence as a major educational center. It also has various museums, parks, an aquarium, and an Arabian animal
                center.

            </p>
            <a>EXPLORE</a>
        </div>

        <img src="../images/sharjah_tts.png" />
    </div>

    <div class="emirate right">
        <div class="text reveal right">
            <h1>Ajman</h1>
            <p>
                Ajman is the smallest of the seven emirates, but it is noted for its picturesque beauty and wonderful beaches. It is also a developing economy
                with a diverse range of tourist attractions including museums, beaches, forts, and retail malls.
            </p>
            <a>EXPLORE</a>
        </div>

        <img src="../images/ajman_tts.png" />
    </div>

    <div class="emirate left">
        <div class="text reveal left">
            <h1>Umm Al Quwain</h1>
            <p>
                From sailing to skydiving, Umm Al Quwain offers a wide range of recreational opportunities. In the emirate, traditional hobbies like
                dhow building and sports like falconry and camel racing are prominent.
            </p>
            <a>EXPLORE</a>
        </div>

        <img src="../images/uaq_tts.png" />
    </div>

    <div class="emirate right">
        <div class="text reveal right">
            <h1>Ras Al-Khaimah</h1>
            <p>
                Offering magnificent landscapes, breathtaking coastlines, and rich, terracotta desert planes, the emirate has firmly established itself as one
                of the most authentic destinations in the Middle East
            </p>
            <a>EXPLORE</a>
        </div>

        <img src="../images/rak_tts.png" />
    </div>

    <div class="emirate left">
        <div class="text reveal left">
            <h1>Fujairah</h1>
            <p>
                The Emirate of Fujairah encompasses a large portion of the UAE's eastern coast as well as the Hajar Mountain region. Its primary hub is
                Fujairah City, a modern industrial town with few tourist attractions of its own.
            </p>
            <a>EXPLORE</a>
        </div>

        <img src="../images/fujairah_tts.png" />
    </div>

    <?php echo $footer_general ?>

    <!-- Link the Reveal Animations Script  -->
    <script src="../javascript/Reveal_Animations_Script.js"></script>
</body>
</html>