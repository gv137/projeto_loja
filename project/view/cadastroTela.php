<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styleLogin.css">
    <title>Cadastro</title>
    
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(208, 216, 223);">
        <a class="navbar-brand"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(255, 255, 255);">
            <span class="navbar-toggler-icon"></span> <font face="Didot">menu</font>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto"> <!-- Itens à esquerda -->
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="produtos.html">Jogos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="carrinho.html">Carrinho</a>
                </li>
            </ul>
            <ul class="navbar-nav" id="direita"> <!-- Itens à direita -->
                <li class="nav-item">
                    <a class="nav-link" href="entrar.html">&#9787; Entrar</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="cadastro.html">Cadastrar</a>
                </li>              
            </ul>
        </div>
    </nav>

    <br><br><br><br>


    <div class="container">
     <h2>Cadastrar</h2>

     

    <form action="../index.php" method="post">
     <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" required>
     </div>
     <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" class="form-control"  name="email" id="email" placeholder="Digite seu e-mail" required>
     </div>
     <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha" required>
     </div>
        <button type="submit" id="botao-cadastrar" class="btn btn-custom btn-block">Cadastrar</button>
    </form>
    </div>

    <?php if (isset($_GET['message']) && $_GET['message'] === 'success'): ?>
    <script>
        alert('Cadastro realizado com sucesso!');
    </script>
    <?php endif; ?>

</body>
</html>
