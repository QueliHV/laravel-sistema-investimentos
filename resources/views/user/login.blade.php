<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap">
    <title>Login Investimentos</title>
</head>
<body>

    <div class="background"></div>

    <section id="conteudo-view" class="login">
        <h1>Investindo</h1>
        <h3>O nosso gerenciador de investimentos</h3>

        <form method='post' action="{{route('user.login')}}">
            <p>Acesse o sistema</p>
            <label>
                <input class="input" placeholder="Usuário" name="username" type="text">
            </label>
            <label>
                <input class="input" placeholder="Senha" name="password" type="password">
            </label>  
            <input class="submit" type="submit" value="Entrar">
        </form>
    </section>    
</body>
</html>