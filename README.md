# Basic PHP Assessment

## Cart Challenge / cart.php

### Step 1)

**Implement getProductById()**
We don't have a database, so we'll pretend that this method does a database lookup by product id, and returns the product row.
It should:
 - take in a product id, NOT a numerical index of the products array  
 - return the entire product, which contains id, title and price.
 - be used in Cart::addProduct()

### Step 2)

**Build Cart class**
Cart extends CartInterface. The CartInterface interface contains method-specific instructions.

### Step 3)
Test by adding and removing multiple items to cart, experimenting with different quantities.  
An example of this is commented out in index.php
