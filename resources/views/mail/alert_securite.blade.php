<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Alert</title>
    <style>
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
<p>Bonjour {{$first_name}}, Notre dispositif intelligent a détecté une intrusion dans votre plantation, vous devriez vous en assurer.</p>
</body>
</html>
