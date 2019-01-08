@extends('layouts.guest.base')

@section('style')
    <style>
        main {
            background: linear-gradient(rgba(0, 0, 0, 0.71), rgba(0, 0, 0, 0.71)), url("/img/background.jpg");
            background-size: cover;
            background-position-y: -360px;
            height: 70vh;
        }
        footer {
            height: 30vh;

            color: white;
        }
        body {
            background-color: rgba(0, 0, 0, 0.88);
        }

        .ic {
            padding: 10px;
            background-color: white;
            border-radius: 100px;
            width: 40px;
            height: 40px;
            display: inline-block;
        }

    </style>
@endsection

@section("content")
    <main class="container-fluid pt-5">
        <div class="row mt-5 pt-5">
            <div class="col-12 text-center text-white">
                <h1>FARMDROID</h1>
                <h3>Le système intelligent qui vous facilite la pratique de
                    <br>
                    l'agriculture
                </h3>
            </div>
            <div class="text-center col-12 mt-5">
                <a href="{{route('guest.login')}}" style="font-size: 1.1rem" class="btn btn-outline-white">Connectez-vous</a>
                <a href="{{route('guest.register')}}" style="font-size: 1.1rem" class="btn btn-outline-white">Inscrivez-vous</a>
            </div>

        </div>
    </main>
    <footer class="container pt-2 px-5">
        <div class="row justify-content-center px-5">
            <div class="col-md-4" style="border-right: 1px solid white">
                <h3>FARMDROID</h3>
                <p>Pour une Afrique plus digitale,
                    <br>
                    Et le goût du High-Tech
                </p>
                <div>
                    <a href="https://github.com/medric49/farmdroid_web" target="_blank" class="ic"><i class="fab fa-github"></i></a>
                    <a href="https://web.facebook.com/medric.sonwa" target="_blank" class="ic"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/Medric49" target="_blank" class="ic"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="col-md-5">
                <h6><b>Ecole Nationale Supérieure Polytechnique</b></h6>
                <p><a href="https://polytechnique.cm" class="link-orange">https://polytechnique.cm</a></p>
                <h6><b>Email : </b></h6>
                <p><a href="mailto:medric49@gmail.com" class="link-orange">medric49@gmail.com</a></p>
            </div>
            <div class="col-md-3">
                <h6><b>Développeurs</b></h6>
                <ul>
                    <li>Médric SONWA</li>
                    <li>Seraphin SOUREC</li>
                    <li>Lucien NDJIE</li>
                    <li>Emmanuel MANDENG</li>
                </ul>
            </div>
        </div>
    </footer>
@endsection