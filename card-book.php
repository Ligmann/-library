<?php
function get_books() {
	global $db;

	$booksStatement = $db->query("SELECT * FROM `books`;");
	$books = $booksStatement->fetchAll(PDO::FETCH_OBJ);

	return $books;
};

function get_user_by_id($id) {
	global $db;

	$userStatement = $db->query("SELECT *FROM `users` WHERE id = $id;");
	$user = $userStatement->fetch(PDO::FETCH_OBJ);

	return $user;
}
?>