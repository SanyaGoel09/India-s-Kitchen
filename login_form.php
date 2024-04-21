<?php
    include 'config.php'; // Include config.php for database connection
    session_start();
    
    $error = array(); // Initialize an error array

    if(isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']); // Escape password input
        $user_type = $_POST['user_type'];

        $hashed_password = md5($password); // Hash the password securely
        if($user_type == "user"){
        $select_user = "SELECT * FROM user_form WHERE email = '$email'";
        $result = mysqli_query($conn, $select_user);
        }else{
            $select_user = "SELECT * FROM seller_form WHERE email = '$email'";
        $result = mysqli_query($conn, $select_user);
        }
        
        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            if($row['password'] === $hashed_password) {
                    header('location:index1.php');
                    exit(); // Prevent further execution
                }
             else {
                $error[] = 'Incorrect password'; // Specific error message for incorrect password
            }
        } else {
            $error[] = 'Incorrect email'; // Specific error message for incorrect email
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
            height: 480px
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
            <h3>login now</h3>

            <div class="input-field">
                <p>Your Email <sup>*</sup></p>
                <input type="text" name="email" required placeholder="Enter Your Email">
            </div>
            <div class="input-field">
                <p>Your Password <sup>*</sup></p>
                <input type="text" name="password" required placeholder="Enter Your Password">
            </div>
            <div class="input-field">
                <p>User Type<sup>*</sup></p>
                <select name="user_type">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Login Now" class="form-btn">
            <p>already have an account? <a href="register_form.php">register now</a></p>
        </form>
    </div>
</body>
</html>