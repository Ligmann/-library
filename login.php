<?php
include 'components/head.php';

$inputEmail = $_POST['email'];
$statement = $db->query("SELECT * FROM users WHERE mail = '$inputEmail';");
$user = $statement->fetch(PDO::FETCH_OBJ);
print_r($user);
if ($user !== false && $user->password === $_POST['password']) {
	$_SESSION['user'] = $user;
	header('location: /');
};

if($_SESSION) {
	header('location: /');
}
?>
<main class="login d-flex align-items-center">
	<div class="container d-flex justify-content-center">
		<div class="login__container px-4 py-3">
			<div class="d-flex align-items-center mb-4">
				<img class="login__images" src="images/logo.png" alt="">
				<h2 class="ps-3 header-text">Biblioteczka <br /> Domowego kościoła</h2>
			</div>
			<form class="login__form d-flex flex-column" action="" method="post">
				<span class="d-flex">
					<span class="input__icon-box pe-2">
						<span class="material-symbols-outlined input__icon">
							mail
						</span>
					</span>
					<input name="email" type="text" class="input input--max-width" placeholder="Podaj mail" required>
				</span>
				<span class="d-flex">
					<span class="input__icon-box pe-2">
						<span class="material-symbols-outlined input__icon">
							key
						</span>
					</span>
					<input name="password" type="password" class="input input--max-width mt-3" placeholder="Podaj hasło" required>
				</span>
				<?php if($error): ?>
					<span class="input__error mt-2 ms-5">
						<?= $error ?>
					</span>
				<?php endif ;?>
				<input class="button--primary mt-4" type="submit" value="Zaloguj się">
			</form>
		</div>
	</div>
</main>
<?php
include 'global-components/footer.php'
?>