<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Learning PHP</title>
</head>
<body>
<h1>Recommended Books</h1>

<?php
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Andrew',
        ],
        [
            'name' => 'Hail Mary',
            'author' => 'Susy'
        ]
    ];
?>

<ul>
    <?php foreach ($books as $book) :?>
    <li><?= $book['name'] ?></li>
    <?php endforeach ?>
</ul>

</body>
</html>
