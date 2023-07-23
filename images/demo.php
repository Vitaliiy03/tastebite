<?php

require('functions.php');


// Example 1:
// get data from DB
$rows = db('SELECT * FROM products');
foreach ($rows as $row) {
    echo $row['id'] . '<br>';
}


// Example 2:
// insert data into db
$success = db('INSERT INTO products (name,price,available) VALUES ("tovar",100,1)')e;
if ($success) {
    echo 'Товар успішно доданий до бази!';
}