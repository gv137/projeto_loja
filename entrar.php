<?php 
    session_start();

    require_once "conexao.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $password = $_POST['password'];
    }
    $sql = "SELECT * FROM users WHERE name = ? AND email = ?";

    $stmt = $conn->prepare($sql);
    $stmt = ->bind_param("ss", $name, $email);
    $stmt ->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row - result->fetch_assoc();

        if (password_verify($password, $row['password'])) {

            $_SESSION["loggedin"] = true;

            header("loacation: site.php");
            exit;
        }

    }
    else {
        $error = "usuário ou senha incorretos";
    }
?>
