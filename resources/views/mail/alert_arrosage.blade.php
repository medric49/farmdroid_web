<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Alert</title>
    <style>
        body {
            font-family: 'sans-serif';
        }
        .title {
            font-size: 2rem;
            color: orangered;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<h1 class="title">Alerte !</h1>
<p>Bonjour {{$first_name}}, Notre dispositif intelligent placé dans votre plantation tient à vous informer que votre système d'arrosage a été activé.</p>
</body>
</html>
