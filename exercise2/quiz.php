<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    function checkAnswers()
    {
        $q1Answer = $_POST["q1"];
        $q2Answer = $_POST["q2"];
        $q3Answer = $_POST["q3"];
        $q4Answer = $_POST["q4"];
        $q5Answer = $_POST["q5"];

        echo "Question 1: On what planet did humans first encounter the Covenant?" . "<br>";
        echo "    You answered: " . $q1Answer . "<br>";
        echo "    Correct answer: " . "Harvest" . "<br><br>";

        echo "Question 2: When did Halo 3: ODST take place?" . "<br>";
        echo "    You answered: " . $q2Answer . "<br>";
        echo "    Correct answer: " . "Between Halo 2 and Halo 3" . "<br><br>";

        echo "Question 3: On Noble Team, who is the only Spartan-II?" . "<br>";
        echo "    You answered: " . $q3Answer . "<br>";
        echo "    Correct answer: " . "Jorge" . "<br><br>";

        echo "Question 4: What weapon was used to kill Kat in Halo: Reach?" . "<br>";
        echo "    You answered: " . $q4Answer . "<br>";
        echo "    Correct answer: " . "A Needle Rifle" . "<br><br>";

        echo "Question 5: What is Cortana's Serial Number?" . "<br>";
        echo "    You answered: " . $q5Answer . "<br>";
        echo "    Correct answer: " . "CTN 0452-9" . "<br><br>";

    }
    function computeGrade()
    {
        $q1Answer = $_POST["q1"];
        $q2Answer = $_POST["q2"];
        $q3Answer = $_POST["q3"];
        $q4Answer = $_POST["q4"];
        $q5Answer = $_POST["q5"];

        $percent = 0;
        $correct = 0;

        if($q1Answer == "Harvest")
        {
            $correct++;
            $percent += 20; 
        } 
        if($q2Answer == "Between Halo 2 and Halo 3")
        {
            $correct++;
            $percent += 20; 
        }
        if($q3Answer == "Jorge")
        {
            $correct++;
            $percent += 20; 
        } 
        if($q4Answer == "A Needle Rifle")
        {
            $correct++;
            $percent += 20; 
        }
        if($q5Answer == "CTN 0452-9")
        {
            $correct++;
            $percent += 20; 
        }
        echo "Quesions Answered Correctly: " . $correct . "<br>";
        echo "Percent Correct: " . $percent . "%" . "<br>";
    }
    checkAnswers();
    computeGrade(); 
?>
