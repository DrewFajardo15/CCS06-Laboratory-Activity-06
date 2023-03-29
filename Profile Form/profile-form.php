<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php

if (isset($_POST['complete_name'])):
echo "<hr />";
echo "<h1>Your Profile</h1>";
echo "Full name: " . $_POST['complete_name'];
echo "<hr />";
// Debug
echo "<pre>";
print_r($_POST);
echo "</pre>";
else:
?>
<h1 style="text-align:center"><marquee>Enter Data</marquee></h1>
<form method="POST" action="profile-form.php" style="text-align:center">
<strong>Name:</strong><input type="text" name="complete_name" /><br />
<strong>Birthdate:</strong><input type="date" name="birthdate" /><br />
<strong>Email Address:</strong><input type="email" name="email" /><br />
<strong>Program:</strong><select name="program">
<option value="BSCS">B.S. Computer Science</option>
<option value="BSIT">B.S. Information Technology</option>
<option value="BSIS">B.S. Information Systems</option>
</select>
<br />
<strong>Favorite Color:</strong><input type="color" name="favorite_color" /><br />
<strong>Superpower Level:</strong><input type="range" name="superpower_level" min="1" max="5000" step="250" /><br />
<button>Submit</button>
</form>
<?php
endif;
?>
</body>
</html>
