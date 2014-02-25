<div id='toolbar' class='toolbarfill'>


	
		
				<form class="login toollist box draggable" id="login" method="post">
				<p> Login </p>
				<div class="toollist">
				<div class="toollist">Username: <input type="text" name="username"></div>
				<div class="toollist">Password: <input type="password" name="password"</div>
				</div>
				<div class="toollist">
				<input type="submit" name="login" class="login toollist">
				</div>
				</div>
				</form>

	
		

	<div>
		<?php
		
			if($_SESSION['status'] == 200){
				echo("UsernamePassword is Invalid");
			}
			
		?>
	</div>
</div>
