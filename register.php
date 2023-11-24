<?php
include_once 'include/register.inc.php';
include_once 'include/functions.php';
?>

<link href="css/bootstrap.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">

<!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!DOCTYPE html>
<html>
    <body>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->  
		<h1 style="margin:.1em .5em 0 .5em; color:white; font-size:56px">Ticketdesk</h1>
		    <div class="panel panel-default" style="margin:2em;">
			  <div class="panel-heading">User Registration</div>
				<div class="panel-body">
					
					<?php
					if (!empty($error_msg)) {
						echo $error_msg;
					}
					if (!empty($success)) {
						echo $success;
					}
					?>
					<div id="regForm">
						<ul>
							<li>Les noms d'utilisateur ne peuvent contenir que des chiffres, des lettres majuscules et minuscules et des traits de soulignement.</li>
							<li>Les e-mails doivent avoir un format d'e-mail valide</li>
							<li>Les mots de passe doivent comporter au moins 6 caractères</li>
							<li>Les mots de passe doivent contenir
								<ul>
									<li>Au moins une lettre majuscule (A..Z)</li>
									<li>Au moins une lettre minuscule (a..z)</li>
									<li>Au moins un chiffre (0..9)</li>
								</ul>
							</li>
							<li>Votre mot de passe et votre confirmation doivent correspondre exactement</li>
						</ul>
					
						<form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">
							<input type='text' class="form-control" placeholder="Username" aria-describedby="basic-addon1"  name='username' id='username' /><br>
							<input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1" name="email" id="email" /><br>
							<input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1"/><br>
							<input type="password" name="confirmpwd" id="confirmpwd" class="form-control" placeholder="Confirm Password" aria-describedby="basic-addon1" /><br>
							<input type="button" name="registerBtn" id="registerBtn" class="btn btn-primary" value="Register" onclick="return regformhash(this.form, this.form.username, this.form.email, this.form.password, this.form.confirmpwd);" /> 
						</form>

						<p>Return to the <a href="index.php">page de connexion</a>.</p>
					</div>
				</div>
			</div> 

      
    </body>
</html>