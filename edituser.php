<?php
include_once 'include/functions.php';
include_once 'include/connect.php';
include_once 'include/user.php';
include_once 'include/updateuser.php'; 
sec_session_start();

if(login_check(dbConnect()) == true) {
	include_once('include/navbar.php'); 
	$user = new user();

	$id = isset($_GET['id']) ? $_GET['id'] : 0;


}
?> 
   <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>

 
		    <div class="panel panel-default" style="margin:2em; margin-top: 90px;">
			  <div class="panel-heading">Edit User</div>
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
					  <div class="col-md-6">
						<form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form"> 
							<?php $user->editUSer($id); ?>

							<input type="button" name="registerBtn" id="registerBtn" class="btn btn-primary" value="Save" onclick="return regformhash(this.form, this.form.username, this.form.email, this.form.password, this.form.confirmpwd,this.form.id,this.form.groupId);" /> 
						</form> 
					 </div>
					 <div class="col-md-6"> 
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
					 </div>
					 <div class="col-md-12">
					 	<table class="table table-bordered">
					 		<thead>
					 			<th>ID de l'utilisateur</th>
					 			<th>Nom et prénom</th>
					 			<th>Nom d'utilisateur</th> 
					 			<th>Departement</th> 
					 			<th>Action</th>
					 		</thead>
					 		<tbody>
					 			<?php 
					 			  $user->loadUser();
					 			?>
					 		</tbody>
					 	</table>
					 </div>
					</div>
				</div>
			</div> 
 