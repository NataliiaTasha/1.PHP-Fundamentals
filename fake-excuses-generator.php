<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excuses</title>
</head>
<body>
    <form method="get" action="">
    
    <label for="child-name">Please enter a name of your child:</label>
    <input type="text" name="child-name" id="child-name">
    
    <legend for="gender">Girl or boy?</legend>
    <input type="radio" id = "child-gender" name="child-gender" value = "girl">
    <label for="gender">Girl</label><br>
    <input type="radio" id = "child-gender" name="child-gender" value = "boy">
    <label for="gender">Boy</label><br>
    
    <legend for="teacher-name">Please enter a name of your teacher:</legend>
    <input type="text" name="teacher-name" id="teacher-name"><br>

    <legend for="reason">A reason for the absence:</legend>
    <input type="radio" id="reason" name="reason" value = "illness">
    <label for="reason">Illness</label><br>
    
    <input type="radio" id="reason" name="reason" value = "activity">
    <label for="reason">Significant extra-curricular activity</label><br>
    
    <input type="radio" id="reason" name="reason" value = "medical">
    <label for="reason">Medical appointment</label><br>

    <input type="radio" id="reason" name="reason" value = "family">
    <label for="reason">Family emergency</label><br>
    
    <input type="submit" name="submit" value="Generate text of excuse">

</form>

<?php
    if (isset($_GET['submit'])) {
        $childName = htmlspecialchars($_GET['child-name']);
        $childGender = htmlspecialchars($_GET['child-gender']);
        $teacherName = htmlspecialchars($_GET['teacher-name']);
        $reason = htmlspecialchars($_GET['reason']);
        $date = date("l, the dS of F Y");

        $sonOrDaughter = ($childGender == "girl") ? "daughter" : "son";


        $excuses = array(
            "illness" => array(
                 "Unfortunately, my $sonOrDaughter $childName, is unable to attend school today due to a sudden illness. We hope for a speedy recovery.", 
                 "Our $sonOrDaughter $childName has caught a nasty flu and won't be able to attend classes today. We appreciate your understanding.", 
                 "Due to a severe cold, our $sonOrDaughter $childName will need to stay home and rest. We hope to return to normal routine soon.", 
                 "This morning, our $sonOrDaughter $childName woke up feeling quite unwell and will not be able to make it to school today.", 
                 "Our $sonOrDaughter $childName is suffering from a high fever and must stay at home. We hope to resume school activities shortly."
            ),
            "activity" => array( 
                "Please excuse our $sonOrDaughter $childName's absence from school today due to a significant extra-curricular activity that requires a full participation.", 
                "Our $sonOrDaughter $childName will be absent today as they are representing our community in an important event. Thank you for your support.", 
                "Today,our $sonOrDaughter $childName is participating in a crucial extra-curricular activity that we believe is essential for their personal development.", 
                "We kindly request your understanding as our $sonOrDaughter $childName will miss school today to attend a major extra-curricular event.", 
                "Our $sonOrDaughter $childName's presence is required at a special event today, which unfortunately coincides with school hours. We appreciate your understanding." 
            ), 
            "medical" => array( 
                "Today, our $sonOrDaughter $childName has a medical appointment that cannot be rescheduled, and will thus be absent from school.", 
                "Our $sonOrDaughter $childName needs to attend a medical check-up today, so we kindly ask you to excuse their absence from school.", 
                "Due to a scheduled medical appointment, our $sonOrDaughter $childName will not be able to attend school today. Thank you for your understanding.", 
                "Please excuse our $sonOrDaughter $childName's absence from school today due to an important medical appointment.", 
                "Our $sonOrDaughter $childName has a necessary medical procedure scheduled for today and will be absent from school." 
            ), 
            "family" => array( 
                "Due to a family emergency, our $sonOrDaughter $childName will not be able to attend school today. We apologize for any inconvenience this may cause.", 
                "There has been an unexpected family emergency, and our $sonOrDaughter $childName needs to be with us today. We appreciate your understanding.", 
                "We regret to inform you that our $sonOrDaughter $childName will be absent today due to a family emergency.", 
                "Due to unforeseen circumstances within our family, our $sonOrDaughter $childName will not be attending school today.", 
                "A family emergency requires our $sonOrDaughter $childName's presence at home today. We hope to resume normal attendance soon." 
                ) 
            );
            $randomIndex = array_rand($excuses[$reason]);
            $selectedExcuse = $excuses[$reason][$randomIndex];

            echo "<p>Dear $teacherName,</p>";
            echo "<p>$selectedExcuse</p>";
            echo "<p>Thank you for understanding.</p>";
            echo "<p>Sinsirely,</p>";
            echo "<p>The parents of $childName</p>";
            echo "<p>$date</p>";

    }
?>
</body>
</html>

