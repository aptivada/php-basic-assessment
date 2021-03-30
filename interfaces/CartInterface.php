<?php 
namespace Interfaces;

interface CartInterface {
    /**
     * Add Product
     * If item is in cart, increment quantity
     * If quantity is not 1, set absolute quantity.  Example, if 2 is given, set item quantity to 2. Do not increment by 2.
     * If quantity is less than one, remove product.
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
