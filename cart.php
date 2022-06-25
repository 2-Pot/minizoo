<?php require './src/php/functionCart.php'; ?>
<?php require './src/php/header.php'; 

$container = '<div class="cart">
    <h3>Cart</h3>';

if (createCart()) {
    $nbMerch = count($_SESSION['cart']['idProduct']);
    if ($nbMerch == 0) {
        $container .= '<tr><td>Your cart is empty...</td></tr></table>';
    }
    else {
        $container .= '<form method="POST" action="cart.php">
        <table style="width:400px">
        <tr>
            <td>Name</td>
            <td>Quantity</td>
            <td>Price</td>
            <td>Modification</td>
        </tr>';
        
        for ($i = 0 ; $i < $nbMerch ; $i++) {
            $container .= '<tr>
                                <td>'.$_SESSION['cart']['name'][$i].'</td>
                                <td>'.$_SESSION['cart']['qty'][$i].'</td>
                                <td>'.$_SESSION['cart']['price'][$i].'</td>
                                <td></td>
                            </tr>';
        }
        $container .= '</table><br/>
                        Total: '.totalCart();
    }
}
$container .= '</form></div>';

echo $container; ?>

<?php require 'src/php/footer.php'; ?>
</body>
</html>
