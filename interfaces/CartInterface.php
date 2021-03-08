<?php 
namespace Interfaces;

interface CartInterface {
    /**
     * Add Product
     * If item is in cart, increment quantity
     * If quantity is not 1, set absolute quantity
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
}