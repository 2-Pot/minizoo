<?php 
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: /minizoo/index.php');
    exit();
}

require 'header.php';
?>

<h1>Account</h1>
<p>Bienvenue  <?php echo htmlentities(trim($_SESSION['email'])); ?> !<br />
<a href="logout.php">Log out</a>
</p>

<?php require 'footer.php'; ?>

</body>
</html>