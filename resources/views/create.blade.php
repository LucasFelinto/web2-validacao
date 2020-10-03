<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <h1> {{$error}} </h1>
        @endforeach
    @endif
    <form action={{ route('user.store') }} method="POST">
        @csrf
        <input type="text" name="nome">
        <input type="email" name="email">
        <input type="text" placeholder="cep" pattern="\\d{5}[-]\\d{2}" name="cep">
        <input type="password" name="senha">
        <input type="text" name="github">
        <input type="text" name="data">
        <input type="text" name="ip">
        <input type="text" name="texto">
        <input type="file" name="foto">
        <textarea name="json" id="" cols="30" rows="10"></textarea>
        <select name="vivo" id=""></select>
        <input type="text" name="matriz">
        <input type="submit" value="enviar">
    </form>
</body>
</html>
