<?php
session_start();
$valid_email = "neloy@gmail.com";
$valid_pass = "1234";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email === $valid_email && $password === $valid_pass){
        $_SESSION['user'] = $email;
        header("Location: dashboard.php");
        exit();
    }else{
        $error = "Invalid email or password!";
    }
}
 ?>

<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<h2>Login</h2>
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
<form method="post">
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Login</button>
</form>
</body>
</html>