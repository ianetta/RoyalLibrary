<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration using PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="register_style.css">
</head>
<body>
    <a href=" index_main.html" class="back_btn"><img src="https://img.icons8.com/external-flatart-icons-solid-flatarticons/64/000000/external-arrow-left-arrows-flatart-icons-solid-flatarticons-4.png"/>Back</a>
    <div class="header">

        <h2>Register</h2>
    </div>

    <form method="post" action="register.php">
        <!-- validation errors-->
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo "$username";?>">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email" value="<?php echo "$email";?>">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <hr>
      
            <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>
            Already have an account? <a href="login.php">Sign in</a>
        </p>
    </form>

</body>
</html>