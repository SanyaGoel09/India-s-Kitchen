<?php
    @include 'config.php';
    if(isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);
        $user_type = $_POST['user_type'];

        $select_user = "SELECT * FROM user_form WHERE email = '$email' && password = '$password'";
        $result = mysqli_query($conn, $select_user);

        if(mysqli_num_rows($result) > 0) {
            $error[] = 'user already exist';
        }else{
            if($password != $cpassword) {
                $error[] = 'password not matched';
            }else{
                $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name', '$email', '$password', '$user_type')";
                mysqli_query($conn, $insert);
                header('location:login_form.php');
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url('3.jpeg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }
        .form-container {
            width: 850px;
            height: 400px;
            display: flex;
            flex-direction: row-reverse;
        }
        form{
            width: 820px;
            height: 700px
        }
        
    </style>
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <?php
                if(isset($error)) {
                    foreach ($error as $error) {
                        echo '<span class="error-msg">'.$error.'</span>';
                    }
                }
            ?>
            <h3>register now</h3>
            <div class="input-field">
                <p>Your Name <sup>*</sup></p>
                <input type="text" name="name" required placeholder="Enter Your Name">
            </div>
            <div class="input-field">
                <p>Your Email <sup>*</sup></p>
                <input type="text" name="email" required placeholder="Enter Your Email">
            </div>
            <div class="input-field">
                <p>Your Password <sup>*</sup></p>
                <input type="text" name="password" required placeholder="Enter Your Password">
            </div>
            <div class="input-field">
                <p>Confirm Your Password <sup>*</sup></p>
                <input type="text" name="cpassword" required placeholder="Confirm Your Password">
            </div>
            <div class="input-field">
                <p>User Type<sup>*</sup></p>
                <select name="user_type">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Register Now" class="form-btn">
            <p>already have an account? <a href="login_form.php">login now</a></p>
        </form>
    </div>
</body>
</html>