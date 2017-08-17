<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>TravelPak with PHP and JS</title>
<link href="travelpak-home.css" rel="stylesheet" type="text/css">	

<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="travel-pak.js"></script>

<script src="https://use.typekit.net/jzb6src.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>

<body>
<!------ OVERLAY ------>
<div id="overlay"></div>

<!------ HEADER ------->
<div><div class="header"> 
	<table class="centered">
	<tr>
    <td id="logo-left"><img src="website assets/images/samplelogo2.png" height="60px" alt="TP"/></td>
   	<td id="logo-centered">
    	<div class="centered"><img src="website assets/images/samplelogo.png" height="50px" alt="TravelPak"/></div>
    </td>
    <td id="signup"></td>
    <td id="login"></td>
    </tr>
    </table>
</div>

<!------ LOG IN ---->
<h1 id="overlay-text" class="tk-balboa-plus-fill"> LOG IN</h1>

<!----- FORM ---->
<div id="form-div">
	<form id="log-in-form" class="form" action="?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?" method="post">
		<input class="form-input" type="email" name="emailAddress" placeholder="email address" size="30" value="" required><br><br>
		<input class="form-input" type="password" name="password" placeholder="password" size="30" value="" required><br><br>
		<input type="checkbox" checked="checked"> remember me  <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p><br>
		<button class="submit-button" type="submit" value="Submit"><img src="website assets/icons/Submit Button.png" alt="submit" height="45px"/></button><br><br>
		<a id="back" href="travelpak-home-js.html"> back </a>
	</form>
</div>
</div>


</body>
</html>
