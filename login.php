<?php
include 'components/head.php';
?>
<main class="login d-flex align-items-center">
	<div class="container d-flex justify-content-center">
		<div class="login__container px-4 py-3">
			<div class="d-flex align-items-center mb-4">
				<img class="login__images" src="images/logo.png" alt="">
				<h2 class="ps-3 header-text">Logowanie do<br /> panelu biblioteki</h2>
			</div>
			<form class="login__form d-flex flex-column" action="/index.php">
				<span class="d-flex">
					<span class="input__icon-box pe-2">
						<span class="material-symbols-outlined input__icon">
							mail
						</span>
					</span>
					<input class="input input--max-width" placeholder="Podaj mail">
				</span>
				<span class="d-flex">
					<span class="input__icon-box pe-2">
						<span class="material-symbols-outlined input__icon">
							key
						</span>
					</span>
					<input class="input input--max-width mt-3" placeholder="Podaj hasło">
				</span>
				<input class="button--primary mt-4" type="submit" value="Zaloguj się">
			</form>
		</div>
	</div>
</main>
<?php
include 'global-components/footer.php'
?>