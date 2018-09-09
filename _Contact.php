<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="images/Komando Flag.png" sizes="16x16
<script src='https://www.google.com/recaptcha/api.js'></script>
<title>Testing reCAPTCHA
</head>

<body>
	<form action="api.php" method="post">
		<label for="subject">Subject</label><br>
		<input type="text" name="subject" id="subject" size="40"><br><br>
		<textarea name="messagefeed" id="messagefeed" cols="60" rows="5"></textarea><br><br>
		<div class="g-recaptcha" data-sitekey="6Lf1V28UAAAAAJfcVrd616Quc75pDWMPipgMW3bf"></div>
		<br>
		<input type="submit" id="sumbit" value="Submit">
	</form>
</body>

</html>