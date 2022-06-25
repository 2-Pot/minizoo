<?php require 'header.php'; ?>

<div class="encadre">
<form action="verification.php" method="POST" class="centre">
        <h1>Create my account</h1>
        
        <div class="mb-3">
            <label class="form-label"><b>Email</b></label>
            <input type="email" id="email" placeholder="Enter a mail adress" name="email" value="" required>
        </div>

        <div class="mb-3">
            <label class="form-label"><b>Password</b></label>
            <input type="password" placeholder="Enter a password" name="password" value="" required>
        </div>

        <div class="mb-3">
            <label class="form-label"><b>Confirm password</b></label>
            <input type="password" placeholder="Confirm password" name="cpassword" value="" required>
        </div>

        <div>
            <input type="submit" class="btn btn-primary" name="register" value='Register' onclick="affMail()" >
        </div>
    </form> 
</div>

<? require 'footer.php'; ?>
</body>
</html>