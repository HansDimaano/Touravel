
<?php

// used codes.php to avoid repetition of codes in other pages (eg., header, footer)

include '../data/codes.php'; // include the codes.php data

?>


<!-- HTML CODE -->
<html>
<head>

    <link rel="stylesheet" href="../css/Header_and_Footer.css" />

    <!-- (from codes.php) link the Touravel website icon -->
    <?php echo $touravel_icon_general ?>

    <!-- entitle the page to Touravel - Our Story -->
    <title>Touravel - Offers</title>

</head>
<body style="background-color: black; color: white;">

    <!-- (from codes.php) include the header code -->
    <?php echo $header_general ?>

    <h1 style="text-align: center; margin-top: 350px;">OFFERS PAGE</h1>

        <script src="../javascript/Header_and_Footer_Script.js"></script>
</body>
</html>