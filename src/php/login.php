<?php require 'header.php'; 

?>


<div id="container">
    
    <form action="connection.php" method="POST" class="centre">
        <h1>Log in</h1>
        
        <div class="mb-3">
            <label class="form-label"><b>Email</b></label>
            <input type="email" placeholder="Enter your mail adress" name="email" value="" required>
        </div>

        <div class="mb-3">
            <label class="form-label"><b>Password</b></label>
            <input type="password" placeholder="Enter your password" name="password" value="" required>
        </div>

        <div>
        <input type="submit" class="btn btn-primary" name="login" value='Login' id="submit">
        </div>
        <button class="btn btn-primary"><a class="btn btn-primary" href="register.php">Register</a></button>
    </form>  
</div>

<?php require 'footer.php'; ?>
</body>
</html>