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

     if (isset($_POST['login_user'])){

        $username = ($_POST['username']);
        $password =($_POST['password']);
 


        //ensure that form fields are filled properly
        if (empty($username)) {
            array_push($errors, 'Username is required');
        }


         if (empty($password)) {
             array_push($errors, 'A password is required');
         } 



  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
    // $_SESSION['success'] = "You are now logged in";
      header('location: home_page.php');
    }else {
        array_push($errors, "Wrong username/password combination");
    }
  }
}

?>

