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


let buttonNav = document.querySelector(".js-button-nav");
let nav = document.querySelector(".js-nav");
buttonNav.addEventListener("click", e=> {
	nav.classList.add("js-nav-active")
});

let exitNav = document.querySelector(".js-nav-exit");
exitNav.addEventListener("click", e=> {
	nav.classList.remove("js-nav-active")
});