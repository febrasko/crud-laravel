<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud em Laravel</title>
</head>
<body>
    <form action="/cadastrar-candidato" method="POST">
        @csrf
        <label for="">Nome:</label>
        <input type="text" name="nome" id="" placeholder="Digite seu nome">
        <br><br>
        <label for="">Telefone:</label>
        <input type="text" name="tel" id="" placeholder="Digite seu telefone">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>