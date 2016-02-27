<?php require 'inc/header.php';?>

<?php 
	if(!empty($_POST)){
		$errors = array();

		if (!empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username']) ){
			$errors['username'] = "nom pas valide";
		}

		if (!empty($_POST['mail']) || !filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL) ){
			$errors['username'] = "email pas valide";
		}
		if (!empty($_POST['password']) || $_POST['password'] != $_POST['password-confirm']){
			$errors['username'] = "Mdp pas valide";
		}
		if(!empty($errors)){
			require_once 'inc/db.php';

			//$req= $pdo->prepare("INSERT INTO users SET username = ? , password = ? , mail = ? ");

			//$pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
//
		//	$req->execute($_POST['username'],$pass,$_POST['mail']);
			//die('compte bien créé');
			
		}
		else{

			debug($errors);
		
		}
	}
 ?>


<h1>S'inscrire</h1>

	<form action="" method="POST">
		<div class="form-group">
			<label for="">Pseudo</label>
			<input type="text" name="username" class= "form-control" \>
		</div>
		
		<div class="form-group">
			<label for="">Email</label>
			<input type="text" name="mail" class= "form-control" \>
		</div>

		<div class="form-group">
			<label for="">Mot de Passe</label>
			<input type="password" name="password" class= "form-control" \>
		</div>
		
		<div class="form-group">
			<label for="">Confirmation Mot de passe</label>
			<input type="password" name="password-confirm" class= "form-control" required\>
		</div>

		<button type="submit" class="btn btn-primary">M'inscrire</button>

	</form>

<?php require 'inc/footer.php'; ?>
