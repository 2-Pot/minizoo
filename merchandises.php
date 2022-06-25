<?php require 'src/php/header.php';
$container = "";
$resultat = "";
$db = mysqli_connect('localhost', 'root', '', 'minizoo_db')
            or die('Could not connect to database');
$container .= '<div class="merch"><h3>Merchandising</h3>';
$res = $db->query("SELECT * FROM products");

$container .= '<div class="merch_list">';
while ($li = $res->fetch_assoc()) {
    $container .= '<div class="obj">
                <img src="'.$li["image_link"].'"><div class="desc">
                <div class="name">'.$li["name"].'</div>
                <div class="price">'.$li["price"].' €</div></div>
                </div>';
}
$container .= '</div></div>';
echo $container;

?>
<?php require 'src/php/footer.php'; ?>
</body>
</html>
