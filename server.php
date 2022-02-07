<?php 
  session_start();


 define('DB_HOST', 'localhost');
 define('DB_USER','root');
 define('DB_PASSWORD','mysql');
 define('DB_NAME','registration');

    $username = '';
    $email = '';
    $errors = array();


$db = @new mysqli (DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if ($db ->connect_errno)exit('ERROR WHITH CONECTION DB');
$db->set_charset('utf8');

    //if the register button is clicked
    if (isset($_POST['register'])) {
        $username = ($_POST['username']);
        $email = ($_POST['email']);
        $password =($_POST['password']);
 


        //ensure that form fields are filled properly
        if (empty($username)) {
            array_push($errors, 'Username is required');
        }

        if (empty($email)) {
            array_push($errors, 'An Email is required');
         }

         if (empty($password)) {
             array_push($errors, 'A password is required');
         }

        

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  
}
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password);//encrypt the password before saving in the database

    $sql = "INSERT INTO users (username, email, password) 
              VALUES('$username', '$email', '$password')";
    mysqli_query($db, $sql);

    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: home_page.php');

  }
}




?>