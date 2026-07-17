<?php
session_start();
?>
<h2>Cart List</h2>

<pre><?php print_r($_SESSION['cart1']); ?></pre>

    <table border="1" class="cart-table">
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>

        <tbody id="cart-list">
            <?php if(isset($_SESSION['cart1']) && !empty($_SESSION['cart1'])): ?>
                <?php foreach($_SESSION['cart1'] as $cart_item): ?>
                    <tr>
                        <td><?= $cart_item['name'] ?></td>
                        <td>$<?= $cart_item['price'] ?></td>
                        <td><?= $cart_item['quantity'] ?></td>
                        <td><button onclick="removeFromCart(<?= $cart_item['id'] ?>)">Remove</button></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="4">Cart is empty</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
    <button class="btn" onclick="checkout()">Checkout</button>
    