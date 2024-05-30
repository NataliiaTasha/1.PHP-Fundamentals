<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable types</title>
</head>
<body>
    <?php
 $firstName = "Tasha";
    echo "<p>Hi! My name is $firstName.</p>";
    $age = 49;
    echo "<p>I am $age years old.</p>";
    $eyeColor = "gray";
    echo "<p>My eyes are $eyeColor.</p>";
    $family = array (
    0 => 'Larisa',
    1 => 'Nataliia',
    2 => 'Andrii'
);
    echo "<p>The first person in my family is $family[0].</p>";

 $isHungry =true;
   echo "<p>Am I hungry? " . ($isHungry ? "Yes" : "No") . ".</p>";
   echo "<p>" . ($isHungry ? "I am hungry." : "I am not hungry.") . "</p>";
?>

</body>
</html>

