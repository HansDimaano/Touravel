
<?php

// used codes.php to avoid repetition of codes in other pages (eg., touravel icon)

include '../data/codes.php'; // include the codes.php data

?>


<?php
    
    // for loop for checking getting the values of the answers of users
    for ($i = 1; $i <= 10; $i++) {

        $i_string = strval($i); // convert $i to string 

        $user_answer = 'user_answer'.$i_string; // create variable for user_answer + $i_string

        $question_num = 'question_'.$i_string; // create string for question_ + $i_string

        $$user_answer = $_POST[$question_num]; // get the answer of user in corresponding question number

        /* 
        
        FOR EXAMPLE IF $i = 1:

        $user_answer1 = $_POST['question_1'];


        FOR EXAMPLE IF $i = 2:

        $user_answer2 = $_POST['question_2'];


        In this way, the code will get the answer of the user in question 1 and 2, storing it in the $user_answer1 and $user_answer2 variables respectively.

        */
    }

    $correctAnswers = 0; // variable for counting the correct answers
        
    // CHECK IF USER GOT THE CORRESPONDING QUESTION CORRECT
    // IF CORRECT, INCREMENT CORRECTANSWERS BY 1
    if ($user_answer1 == "B") { $correctAnswers++; }
    if ($user_answer2 == "A") { $correctAnswers++; }
    if ($user_answer3 == "A") { $correctAnswers++; }
    if ($user_answer4 == "A") { $correctAnswers++; }
    if ($user_answer5 == "C") { $correctAnswers++; }
    if ($user_answer6 == "B") { $correctAnswers++; }
    if ($user_answer7 == "A") { $correctAnswers++; }
    if ($user_answer8 == "C") { $correctAnswers++; }
    if ($user_answer9 == "A") { $correctAnswers++; }
    if ($user_answer10 == "A") { $correctAnswers++; }
            

    $resultMessage = ""; // variable for the result message ACCORDING to the score


    if ($correctAnswers <= 3) { // if score is 0 - 3
        $resultMessage = "Hmmm.. Looks like you need more UAE travelling experience."; // result message for 0 - 3
    }

    else if ($correctAnswers >= 4 && $correctAnswers <= 7) { // if score is 4 - 7
        $resultMessage = "You are all set! Let's go travel UAE!"; // result message for 4 - 7
    }

    else if ($correctAnswers >= 8 && $correctAnswers <= 9) { // if score is 8 - 9
        $resultMessage = "Wow! You are more than ready to travel UAE!"; // result message for 8 - 9
    }

    else if ($correctAnswers == 10) { // if score is 10
        $resultMessage = "Are you sure you're not an Emirati? Coz' you nailed it!"; // result message for 10
    }
?>


<!-- HTML CODE -->
<html>
<head>

    <!-- to make the website look good in all devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link Quiz Results Page CSS -->
    <link rel="stylesheet" href="../css/QuizResultsPage.css" />

    <!-- (from codes.php) link the Touravel website icon -->
    <?php echo $touravel_icon_general ?>

    <!-- entitle the page to Touravel - UAE Quiz Results -->
    <title>Touravel - UAE Quiz Results</title>

</head>
<body>

    <!-- TOURAVEL LOGO -->
    <img src="../images/Touravel_Logo-white.png" class="logo" />


    <!-- SCORE CONTAINER -->
    <div class="score_container">

        <!-- "You Scored" Text -->
        <h3>YOU SCORED</h3>

        <!-- Score Text -->
        <h1>
            <?php echo $correctAnswers ?>/10 <!-- print the $correctAnswers value plus "/10" text -->
        </h1>

        <!-- Result Message Text -->
        <p>
            <?php echo $resultMessage ?> <!-- print the $resultMessage value -->
        </p>
    </div>
    

    <!-- BUTTONS CONTAINER -->
    <div class="buttons">

        <!-- Go to UAE Page Button -->
        <a href="Touravel_AboutUAE.php">

            <!-- Go to UAE Page Button image -->
            <img src="../images/goback_btn.png" style="margin-right: 10px;"/>

            <!-- Go to UAE Page Text -->
            <h2>Go to UAE Page</h2> 
        </a>

        <!-- Retake Quiz Button -->
        <a href="Quiz.php">

            <!-- Retake Quiz Text -->
            <h2>Retake Quiz</h2>

            <!-- Retake Quiz Button image -->
            <img src="../images/retake_btn.png" style="margin-left: 10px;"/>
        </a>
    </div>
</body>
</html>