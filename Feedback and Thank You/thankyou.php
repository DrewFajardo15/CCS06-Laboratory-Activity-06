<!DOCTYPE html>
<html>
<head>
	<title>Thank You Form</title>
</head>
<body>
	<h1>Thank You!</h1>
    Received <strong><?php echo $_POST['type']; ?></strong> message from <strong><?php echo $_POST['complete_name']; ?> (<?php echo $_POST['email']; ?>)</strong><br />

    <p><strong>Message:<br /><br /></strong><?php echo $_POST['message']; ?></p>
    
    <p><strong>Satisfaction Level: </strong> <?php echo $_POST['satisfaction_level']; ?></p>

</body>
</html>