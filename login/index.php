<?php



session_start(); // Start session at the beginning of the script
$errorMessege = "";

if(isset($_POST["Sign_up"])) {
    require('conn.php');

    $usernameValue = "";
    $emailValue = "";
    $password = "";
    $errorUsername = "<br>";
    $errorEmail = "<br>";
    $errorPass = "<br>";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $flag = false;

    if(empty($_REQUEST["username"])) {
        $errorUsername = "Please enter the Username";
        $flag = true;
    } else {
        $username = $_POST["username"];
        $q_username = "SELECT * FROM userdetails WHERE username = '$username'";
        $query_username = mysqli_query($conn, $q_username);
        if(!$query_username) {
            die('Query failed: ' . mysqli_error($conn)); // Handle query error
        }
        $row_username = $query_username->num_rows;

        if($row_username > 0) {
            $errorUsername = "This username is already taken";
            $flag = true;
        }
    }

    if(empty($_REQUEST["email"])) {
        $errorEmail = "Please enter the Email";
        $flag = true;
    } else {
        $email = $_POST["email"];
        $q = "SELECT * FROM userdetails WHERE ugmail = '$email'";
        $query = mysqli_query($conn, $q);
        if(!$query) {
            die('Query failed: ' . mysqli_error($conn)); // Handle query error
        }
        $row = $query->num_rows;

        $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
        if (!preg_match($pattern, $email)) {
            $errorEmail = "Invalid email format";
            $flag = true;
        } elseif($row > 0) {
            $errorEmail = "This email is already used";
            $flag = true;
        }
    }

    if(empty($_REQUEST["pass"])) {
        $errorPass = "Please enter the Password";
        $flag = true;
    }

    if(!$flag) {
        $emailValue = $_REQUEST["email"];
        $role = $_REQUEST["role"];
        $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $query = "INSERT INTO users (name, email, password, flag) VALUES ('$username', '$emailValue', '$password', '$role')";
        if(mysqli_query($conn, $query)) {
            header("Location: index.php");
            exit();
        } else {
            die('Query failed: ' . mysqli_error($conn)); // Handle query insert error
        }
    }
} else if(isset($_POST['Login'])) {
    require('conn.php');

    if(isset($_POST['name']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE name = '$name'";
        $query2 = mysqli_query($conn, $query);
        if(!$query2) {
            die('Query failed: ' . mysqli_error($conn)); // Handle query error
        }
        $arr2 = mysqli_fetch_assoc($query2);

        if ($arr2 && password_verify($_POST['password'], $arr2['password'])) {
            $_SESSION['user_id'] = $arr2['id'];
            $_SESSION['user_name'] = $arr2['name'];
            $_SESSION['email'] = $arr2['email'];
            header("Location: ../index.php");
            exit();
        } else {
            $errorMessege = 'Incorrect Username or Password';
          
        }
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="style.css" />
  <title>Sign in & Sign up Form</title>
</head>
<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" class="sign-in-form" method="POST">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="ri-user-line"></i>
            <input type="text" placeholder="Username" name="name"/>
          </div>
          <div class="input-field">
            <i class="ri-lock-line"></i>
            <input type="password" placeholder="Password" name="password" />
          </div>
          <input type="submit" value="Login" class="btn solid" name="Login" />
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="ri-facebook-fill"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="ri-twitter-fill"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="ri-google-fill"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="ri-linkedin-box-fill"></i>
            </a>
          </div>
        </form>
        <form action="" class="sign-up-form" method="POST">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="ri-user-line"></i>
            <input type="text" placeholder="Username" name="username" />
          </div>
          <div class="input-field">
            <i class="ri-mail-line"></i>
            <input type="email" placeholder="Email" name="email"/>
          </div>
          <div class="input-field">
            <i class="ri-lock-line"></i>
            <input type="password" placeholder="Password" name="pass" />
          </div>
          <div class="input-field">
          <i class="ri-user-follow-line"></i>
            <select name="role" class="roles" required>
              <option value="counsellor">counsellor</option>
              <option value="patient">patient</option>
              <option value="guest">guest</option>
            </select>
          </div>
          <input type="submit" class="btn" value="Sign up" name="Sign_up"/>
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="ri-facebook-fill"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="ri-twitter-fill"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="ri-google-fill"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="ri-linkedin-box-fill"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Wan to join our community? Sign up now and start your journey with us.
          </p>
          <?php
          if($errorMessege) {
            echo "<div class='alert alert-danger' role='alert'>$errorMessege</div>";
          }
          ?>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            If you already have an account, just sign in. We've missed you!
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
          <?php
          if($errorMessege) {
            echo "<div class='alert alert-danger' role='alert'>$errorMessege</div>";
          }
          ?>
        </div>
        <img src="img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="app.js"></script>
</body>
</html>
