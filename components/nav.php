<?php
	$user = $_SESSION['user'];
?>
<div class="container py-3">
	<div class="d-flex justify-content-between">
		<a href="index">
			<picture>
				<img class="nav__logo" src="images/logo.png" alt="Domowy kościół">
			</picture>
		</a>
		<div class="d-flex align-items-center">
			<div class="d-md-flex d-none justify-content-end">
				<span class="nav__icon-serch">
					<span class="material-symbols-outlined  button__icon-function">
						search
					</span>
				</span>
				<input class="nav__input-serch" placeholder="Wyszukiwarka" type="text">
			</div>
			<button class="ms-3 button--primary d-flex js-button-nav">
				<span class="material-symbols-outlined button__icon-function">person</span>
				<span>Moje konto</span>
			</button>
			<button class="ms-3 button--primary d-lg-flex d-none js-logout">
				<span class="material-symbols-outlined button__icon-function">logout</span>
				<span>Wyloguj się</span>
			</button>
			<div class="ms-3 nav__person d-sm-flex d-none">
				<span>
					<b>Zalogowany:</b> <br />
					<span class="nav__person-name">
						<?=$user->first_name.' '.$user->last_name?>
					</span>
				</span>
			</div>
		</div>
	</div>
</div>
<div class="js-nav nav">
	<nav class="nav__box">
		<div class="mb-4 d-flex justify-content-end">
			<button class="nav__exit js-nav-exit">
				<span class="material-symbols-outlined nav_exit-icon">cancel</span>
			</button>
		</div>
		<div class="mb-3 nav__person d-flex d-sm-none">
			<span>
				<b>Zalogowany:</b> <br />
				<span class="nav__person-name">
					<?=$user->first_name.' '.$user->last_name?>
				</span>
			</span>
		</div>
		<button class="mb-3 button--primary d-flex">
			<span class="material-symbols-outlined button__icon-function">add</span>
			<span>Dodaj książke</span>
		</button>
		<button class="mb-3  button--primary d-flex">
			<span class="material-symbols-outlined button__icon-function">edit</span>
			<span>Edytuj dodane książki</span>
		</button>
		<button class="mb-3 button--primary d-flex">
			<span class="material-symbols-outlined button__icon-function">library_books</span>
			<span>Moje wypożyczone książki</span>
		</button>
		<button class="mb-3 button--primary d-lg-none d-flex js-logout">
			<span class="material-symbols-outlined button__icon-function">logout</span>
			<span>Wyloguj się</span>
		</button>
		<div class="d-md-none d-flex mt-5">
			<span class="nav__icon-serch">
				<span class="material-symbols-outlined  button__icon-function">
					search
				</span>
			</span>
			<input class="nav__input-serch" placeholder="Wyszukiwarka" type="text">
		</div>
	</nav>
</div>