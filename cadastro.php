<?php  
    require_once "conexao.php";

    if ($_SERVER["REQUEST_METHOD"] ==  "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (nome, email, passeword) VALUES (?, ?, ?)";
        
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("sss", $name, $email, $hashed_password);

        if($stmt->execute()) {
            echo "Usuário criado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
        $stmt->close();
    }
$conn->close();
?>