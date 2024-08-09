<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página Inicial</title>
</head>
<body>
<?php include '../includes/navbar.php'; ?>
<h2>Bem-vindo, <?php echo $_SESSION['email']; ?></h2>
<p>Você está logado com sucesso.</p>
</body>
</html>
