<?php
session_start();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cake_name = $_POST['cake_name'];
    $cake_price = $_POST['cake_price'];

    // Store the item in session
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $_SESSION['cart'][] = ['name' => $cake_name, 'price' => $cake_price];
}

// Remove item from cart if requested
if (isset($_GET['remove']) && isset($_SESSION['cart'])) {
    $index = $_GET['remove'];
    unset($_SESSION['cart'][$index]);
    // Reset array keys to maintain continuous indexing
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Bakes-Me</title>
    <link rel="stylesheets" href="/stylesheets/checkout.css">
</head>

<body>
    <div class="container">
        <header>
            <h1 style="color:#fff">Checkout</h1>
        </header>
        <div class="checkout-content">
            <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
                <div class="rec">

                    <table>
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            foreach ($_SESSION['cart'] as $index => $item) {
                                echo "<tr><td>{$item['name']}</td><td>Rs: {$item['price']}</td>";
                                echo "<td><a href='checkout.php?remove={$index}'>Remove</a></td></tr>";
                                $total += $item['price'];
                            }
                            ?>
                            <tr>
                                <td><strong>Total</strong></td>
                                <td colspan="2"><strong>Rs: <?php echo $total; ?></strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn">

                        <button onclick="window.print()">Print</button>
                        <a href="home.php"><button>Add More Items</button></a>
                    <?php else: ?>
                        <p>Your cart is empty.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>