<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $guardian = $_POST['guardian'];
    $guardian_phone = $_POST['guardian_phone'];
    $cpf = $_POST['cpf'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name, dob, phone, email, guardian, guardian_phone, cpf, password, type) 
            VALUES ('$name', '$dob', '$phone', '$email', '$guardian', '$guardian_phone', '$cpf', '$password', 'student')";
    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
    } else {
        $error = "Erro ao cadastrar: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Aluno</title>
</head>
<body>
<?php include 'navbar.php'; ?>
<h2>Cadastro de Aluno</h2>
<form method="POST" action="register_student.php">
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" required><br>
    <label for="dob">Data de Nascimento:</label>
    <input type="date" id="dob" name="dob" required><br>
    <label for="phone">Telefone:</label>
    <input type="text" id="phone" name="phone" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="guardian">Responsável:</label>
    <input type="text" id="guardian" name="guardian" required><br>
    <label for="guardian_phone">Telefone do Responsável:</label>
    <input type="text" id="guardian_phone" name="guardian_phone" required><br>
    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" required><br>
    <label for="password">Senha:</label>
    <input type="password" id="password" name="password" required><br>
    <button type="submit">Cadastrar</button>
    <?php if(isset($error)) echo $error; ?>
</form>
</body>
</html>
