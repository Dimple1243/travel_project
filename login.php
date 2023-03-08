<?php
//connect to database
$db = mysqli_connect('localhost', 'root', '@Dimple123', 'login');

// Login user
if (isset($_POST['submit'])) {
  $username = mysqli_real_escape_string($db, $_POST['user']);
  $password = mysqli_real_escape_string($db, $_POST['pass']);

  $query = "SELECT * FROM users WHERE Username='$username' AND Password='$password'";
  $results = mysqli_query($db, $query);

  if (mysqli_num_rows($results) == 1) {
    $user = mysqli_fetch_assoc($results);
    $_SESSION['Username'] = $user['Username'];
    $_SESSION['Role'] = $user['Role'];
    $_SESSION['userid']=$user['userid'];
    // setcookie('userid',$user['userid']);

      if ($user['Role'] == 'Admin') {
      header('Location:http://localhost/phpmailer/admin.php');
    } else {
      header('Location:http://localhost/phpmailer/user.php');
    }
  } else {
    echo "Wrong username/password combination";
  }
}
