//	MODAL BOOK INDEX
let buttonModalBook = document.querySelectorAll(".js-button-read-more");

buttonModalBook.forEach(e => {
	let idButton = e.dataset.id;
	e.addEventListener("click", () => {
		let modalBook = document.querySelectorAll(".js-book-modal");
		let exitModal = document.querySelectorAll(".js-modal-exit");

		modalBook.forEach(modal => {
			let idModal = modal.dataset.id_modal;
			if (idButton === idModal) {
				modal.classList.add('js-modal-active');
			};

			exitModal.forEach(exitIteral => {
				exitIteral.addEventListener("click", () => {
					modal.classList.remove('js-modal-active');
				});
			});
		});
	});
});

//	LOGOUT
let logout = document.querySelectorAll(".js-logout");

logout.forEach(e => {
	e.addEventListener("click", () => {
		var url = 'http://dev.library.pl/logout.php';
		var formData = new FormData();
		formData.append('post_button', true);

		fetch(url, { method: 'POST', credentials: 'include', body: formData })
			.then(function (response) {
				return response.text();
			})
			.then(function (body) {
				// console.log(body);
				window.location.reload();
			});
	});
});

//	NAV
function navAction() {
	let nav = document.querySelector(".js-nav");
	let bodyNavStyles = document.querySelector("body");

	nav.classList.toggle("js-nav-active");
	bodyNavStyles.classList.toggle("js-nav-hidden");
};

let buttonNav = document.querySelector(".js-button-nav");
buttonNav.addEventListener("click", e => {
	navAction();
});

let exitNav = document.querySelector(".js-nav-exit");
exitNav.addEventListener("click", e => {
	navAction();
});
