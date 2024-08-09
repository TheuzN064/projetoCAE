<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("Location: home.php");
    } else {
        $error = "Email ou senha incorretos";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<?php include 'navbar.php'; ?>
<form method="POST" action="login.php">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="password">Senha:</label>
    <input type="password" id="password" name="password" required><br>
    <button type="submit">Login</button>
    <?php if(isset($error)) echo $error; ?>
</form>
</body>
</html>
