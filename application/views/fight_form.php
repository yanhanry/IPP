<div id="fight_form">
	<h1>Let's fight!</h1>
	<?php

	//echo form_open('login/validate_credentials');
	echo form_open('fight/fight_validate_credentials#login_form');
	echo form_input('username','Username');
	echo form_password('password','Password');
	echo form_submit('submit','Login');
	echo anchor('login/signup','Create Account');
	?>
</div>