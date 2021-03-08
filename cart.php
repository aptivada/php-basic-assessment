<?php 
include __DIR__ . "/interfaces/CartInterface.php";

/*** Products ***
Title       Price

Valheim     19.99
Loop Hero   12.74
Rust        39.99
Hades       24.99
*/

$products = [
    [
        'id' => 1,
        'title' => 'Valheim', 
        'price' => 19.99,
    ],
    [
        'id' => 2,
        'title' => 'Loop Hero',
        'price' => 12.74,
    ],
    [
        'id' => 3,
        'title' => 'Rust',
        'price' => 39.99,
    ],
    [
        'id' => 4,
        'title' => 'Hades',
        'price' => 24.99,
    ],
];

function getProductById($id){
  // return product
  // throw error if not found
}

// class Card implements Interfaces\CartInterface {

// }