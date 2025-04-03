<?php

$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Andrew Weir',
        'releaseYear' => '2010',
        'purchaseUrl' => 'http://example.com/',
    ],
    [
        'name' => 'Hail Mary',
        'author' => 'Susy',
        'releaseYear' => '2012',
        'purchaseUrl' => 'http://example.com/',
    ]
];

$filteredBooks = array_filter($books, function ($book) {
    return $book['author'] === 'Andrew Weir';
});

require "index.view.php";
