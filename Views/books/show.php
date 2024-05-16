<?php
include __DIR__ . '/../header.php';
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo '404 Not found';
    die();
}

include __DIR__ . '/../../Models/Book.php';
$book = Model::readOne($conn, $id, 'books', 'Book');
?>
<section class="container">
    <h2>Movie Detail:
        <?= $book->title ?>
    </h2>
    <img src="<?= $book->cover_image ?>" alt="<?= $book->title ?>">


    </div>
</section>