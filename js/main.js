let buttonModalBook = document.querySelectorAll(".js-button-read-more");
buttonModalBook.forEach(e => {
	let idButton = e.dataset.id;
	e.addEventListener("click", ()=> {
		let modalBook = document.querySelectorAll(".js-book-modal");
		let exitModal = document.querySelectorAll(".js-modal-exit");

		modalBook.forEach(modal => {
			let idModal = modal.dataset.id_modal;
			if(idButton === idModal) {
				modal.classList.add('js-modal-active');
			};

			exitModal.forEach(exitIteral => {
				exitIteral.addEventListener("click", ()=> {
					modal.classList.remove('js-modal-active');
				});
			});
		});
	});
});

//	NAV
let buttonNav = document.querySelector(".js-button-nav");
let nav = document.querySelector(".js-nav");
let bodyNavStyles = document.querySelector("body");

buttonNav.addEventListener("click", e=> {
	nav.classList.add("js-nav-active");
	bodyNavStyles.classList.add("js-nav-hidden");
});

let exitNav = document.querySelector(".js-nav-exit");
exitNav.addEventListener("click", e=> {
	nav.classList.remove("js-nav-active");
	bodyNavStyles.classList.remove("js-nav-hidden");
});

//	LOGOUT
let logout = document.querySelector(".js-logout");

logout.addEventListener("click", ()=> {
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
