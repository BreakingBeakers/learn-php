<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Learning PHP</title>
</head>
<body>
<h1>Recommended Books</h1>

<ul>
    <?php foreach ($filteredBooks as $book) :?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear']; ?>)
            </a>
        </li>
    <?php endforeach ?>
</ul>

</body>
</html>
