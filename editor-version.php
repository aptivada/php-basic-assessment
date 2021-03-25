<?php 
**
 * Interfaces 
 *
*/
interface CartInterface {
    /**
     * Add Product
     * If item is in cart, increment quantity
     * If quantity is not 1, set absolute quantity value, instead of incrementing
     * If product is less than one, remove product from cart
     * 
     */
    function addProduct($id, $quantity = 1);
    function removeProduct($id);

    /**
     * Get Total Price 
     * price * quantity for all items
     */
    function getTotalPrice();

    /**
     * Get Total Items
     * item * quantity
     */
    function getTotalItems();

    /**
     * Output table of all items, prices, quantity in cart, etc
     */
    function printCart();
}

/**
 * Products Database Example
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

/*
 * Query Example database by id
 */
function getProductById($id){
  // return product
  // throw error if not found
}

/* 
 * Implement Cart methods
 */
// class Cart implements CartInterface {

// }

/**
 * App Code Here
 */ 

// init cart
// add various items to cart
// remove item or two from cart
// update item quantity
// print cart
