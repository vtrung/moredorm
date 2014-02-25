<?php include("includes/header1.php"); ?>

<!-- =====Notes can be input using this syntax===== -->




<div id="form1">
	<form class="login" action="insert.php" method="post">
	<div class="login"> Username: <input type="text" name="username"></div>
	<div class="login" style="margin-left:10px;">Password: <input type="password" name="password"></div>
	<button input type="submit" class="login"> Submit </button>
	</form>
</div>
	

	
	
<div id="mainbody">
<form id="signupform" action="newresident.php" method="post">
Username:<input type="text" name="username"><br />
First Name:<input type="text" name="firstname"><br />
Last Name:<input type="text" name="lastname"><br />
Age:<input type="date" name="age"><br />
Email:<input type="text" name="email"><br />
Password:<input type="password" name="password"><br />
<input type="submit">
</form>
</div>	

<div id="bottomfooter">
	<ul>
	<li>about us</li>
	<li>contact us</li>
	</ul>
	
</div>


<script src="js/script.js"></script>
</body>
</html>