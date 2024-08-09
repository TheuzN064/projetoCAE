<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
</head>
<body>
<?php include 'navbar.php'; ?>
<h2>Cadastro</h2>
<form method="POST" action="register.php">
    <label for="type">Você é um:</label>
    <select id="type" name="type">
        <option value="admin">Administrador</option>
        <option value="student">Aluno</option>
    </select><br>
    <button type="submit">Próximo</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST['type'];
    if ($type == "admin") {
        header("Location: register_admin.php");
    } else if ($type == "student") {
        header("Location: register_student.php");
    }
}
?>
</body>
</html>
