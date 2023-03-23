<?php

$_SESSION['cart'] = array();


// Add an item to the cart
function add_to_cart($id_prod, $name_prod, $image, $price, $quantity,$size) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    if (isset($_SESSION['cart'][$id_prod])) {
        $_SESSION['cart'][$id_prod]['quantity'] += $quantity;
    } else {
        $_SESSION['cart'][$id_prod] = array(
            'id_prod' => $id_prod,
            'name_prod' => $name_prod,
            'image' => $image,
            'price' => $price,
            'quantity' => $quantity,
            'size'=>$size
        );
    }
}


// Remove an item from the cart
function remove_from_cart($id_prod) {
    if (isset($_SESSION['cart'][$id_prod])) {
        unset($_SESSION['cart'][$id_prod]);
    }
}

// Update the quantity of an item in the cart
function update_cart($id_prod, $quantity) {
    if (isset($_SESSION['cart'][$id_prod])) {
        $_SESSION['cart'][$id_prod]['quantity'] = $quantity;
    }
}

// Get the total cost of the items in the cart
function get_total_cost() {
    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return $total;
}

// Display the cart
function display_cart() {
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            echo $item['name_prod'] . ' (' . $item['id_prod'] . ') ' . $item['quantity'] . ' x ' . $item['price'] . '<br>';
        }
        echo 'Total cost: ' . get_total_cost();
    } else {
        echo 'Your cart is empty.';
    }
}


function get_item_count() {
    if (!isset($_SESSION['cart'])) {
        return 0;
    }
    $count = 0;
    foreach ($_SESSION['cart'] as $item) {
        $count += $item['quantity'];
    }
    return $count;
}
?>

