<!DOCTYPE html>
<html>
<head>
	<title>Feedback Form</title>
</head>
<body>
	<form method="POST" action="thankyou.php">
		<label for="complete_name">Name:</label>
		<input type="complete_name" name="complete_name" id="complete_name" required><br>

		<label for="email">Email Address:</label>
		<input type="email" name="email" id="email" required><br>

        Program:<select name="type">
    <option value="Inquiry">Inquiry</option>
    <option value="Feedback">Feedback</option>
    <option value="Other...">Other...</option>
    </select><br />

        <label for="satisfaction_level">Satisfaction Level:</label>
		<input type="range" name="satisfaction_level" min="1" max="10" step="1" /><br />

		<label for="message">Feedback Message:</label>
		<textarea name="message" id="message" required></textarea><br>

		<input type="submit" value="Submit">
	</form>
</body>
</html>