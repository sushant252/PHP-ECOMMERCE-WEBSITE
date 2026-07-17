


<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['id']) && !isset($_POST['action'])) {
        // Add to cart
        $id = $_POST['id'];
        $name = $_POST['p_name'];
        $price = $_POST['p_price'];

          $img = trim($_POST['p_img']);

        if (!isset($_SESSION['cart1'])) {
            $_SESSION['cart1'] = [];
        }


        $img = isset($_POST['p_img']) ? trim($_POST['p_img']) : 'admin_panel/default.jpg';

        if ($img === "admin_panel/undefined") {
            $img = 'admin_panel/default.jpg'; // 
        }     



        $found = false;
        foreach ($_SESSION['cart1'] as &$item) {
            if ($item['id'] == $id) {
                $item['quantity'] += 1;
                $found = true;
                break;
            }
        }

        if (!$found) {
            $_SESSION['cart1'][] = ['id' => $id, 'name' => $name, 'price' => $price, 'quantity' => 1 ,'img' => $img  ];
        }

        echo json_encode(["message" => "Item added to cart"]);
        exit;
    }

    if (isset($_POST['action']) && $_POST['action'] == 'remove' && isset($_POST['id'])) {
        $id = $_POST['id'];

        foreach ($_SESSION['cart1'] as $key => $item) {
            if ($item['id'] == $id) {
                unset($_SESSION['cart1'][$key]); // Remove item
                $_SESSION['cart1'] = array_values($_SESSION['cart1']); // Re-index array
                echo json_encode(["message" => "Item removed from cart"]);
                exit;
            }
        }

        echo json_encode(["message" => "Item not found"]);
        exit;
    }
}
?>
