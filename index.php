<?php
include 'global-components/head.php';
include 'global-components/nav.php';
$config = require_once 'config.php';
?>
<main role="main" class="py-5">
	<div class="container">
		<?php
		$i = 0;
		include 'card-book.php';
		foreach ($books_card as $books_card_item) : $i++; ?>
			<section class="mb-4 p-4 book-card">
				<div class="row">
					<div class="col-xl-3 col-lg-4 col-md-5">
						<div class="book-card__box-image mb-lg-0 mb-md-3">
							<img class="book-card__item-image" src="<?= $url_images ?><?= $books_card_item["img"] ?>" alt="<?= $books_card_item["name_book"] ?>">
						</div>
					</div>
					<div class="col-xl-9 col-lg-8 col-md-7 pt-md-0 pt-3">
						<h2 class="book-card__heading">
							<?= $books_card_item["name_book"] ?>
						</h2>
						<b class="book-card__author">Autor:</b>
						<span class="book-card__text">
							<?= $books_card_item["author_book"] ?>
						</span>
						<div class="book-card__box-iformacion md-4 mt-3 d-flex flex-lg-row flex-column">
							<span class="book-card__box-iformacion-item">
								<b>Właściciel książki:</b>
								<span class="book-card__box-iformacion-text">
									<?= $books_card_item["owner_book"] ?>
								</span>
							</span>
							<span class="book-card__box-iformacion-item ms-lg-3 ms-0 mt-lg-0 mt-3">
								<b>Stan:</b>
								<span class="book-card__box-iformacion-text">
									<?= $books_card_item["loan_status"] ? "Na stanie" : "Wypożyczona" ?>
								</span>
							</span>
							<?php if ($books_card_item['loan_status'] === false) : ?>
								<span class="book-card__box-iformacion-item ms-lg-3 ms-0 mt-lg-0 mt-3">
									<b>Osoba wypożyczająca:</b>
									<span class="book-card__box-iformacion-text">
										<?= $books_card_item["borrower_book"] ?>
									</span>
								</span>
							<?php endif; ?>
						</div>
						<div class="star mt-3">
							<b>Oceń książkę:</b>
							<div class="d-flex align-items-center">
								<?php
								for ($i = 1; $i <= 5; $i++) {
									echo '<span class="material-symbols-outlined">star</span>';
								}
								?>
								<span class="ms-2">0/5</span>
							</div>
						</div>
						<div class="mt-3 book-card__description">
							<b>Opis książki:</b>
							<p class="book-card__description-text">
								<?= substr($books_card_item["description"], 0, 629); ?>
								<?php if (strlen($books_card_item["description"]) >= 629) : ?>
									<span>...</span>
									<button data-id="<?= $i ?>" class="button js-button-read-more"> Czytaj więcej</button>
								<?php endif; ?>
							</p>
						</div>
						<?php if($books_card_item['loan_status'] === true): ?>
							<button class="mt-3 button--primary d-flex">
								<span class="material-symbols-outlined button__icon-function">auto_stories</span>
								<span>Wypożycz książke</span>
							</button>
						<?php endif;?>
					</div>
				</div>
			</section>
			<?php if (strlen($books_card_item["description"]) >= 629) : ?>
				<div data-id_modal="<?= $i ?>" class="book-card__modal js-book-modal">
					<div class="container">
						<div class="d-flex justify-content-end mb-5">
							<button class="book-card__modal-item-exit js-modal-exit">
								<span class="material-symbols-outlined nav_exit-icon">cancel</span>
							</button>
						</div>
						<?= $books_card_item["description"] ?>
					</div>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
</main>

<?php
include 'global-components/footer.php'
?>