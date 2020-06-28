<?php require 'inc/header.php' ?>
<?php require 'inc/topbar.php' ?>
<div class="container">

  	<center>
    	<?php require 'inc/msg.php' ?>
    </center>
		<form method="post" class="text-center border border-light p-5">
			<p class="h1 mb-4 text-center limelight">Connectez vous</p>
				<!-- Email -->
				<input type="email" id="email" name="email" class="form-control mb-4" required="required">
				<label for="email">Adresse email</label>

				<!-- Password -->
				<input type="password" id="password" name="password" class="form-control mb-4" required="required">
				<label for="password">Mot de passe</label>


	<!-- Sign in button -->
	<center>
  		<button type="submit" name="submit" class="waves-effect waves-light btn light-blue">
  			<i class="material-icons left">perm_identity</i>
  				Se connecter
  		</button>
  	</center>

	<!-- Register -->
	<center>
		<p class="text-center">Pas encore inscrit ?
        	<a href="<?=ROOT_URL?>blog_registration.html">Register</a>
		</p>
	</center>
		</form>
</div>
