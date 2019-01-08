@extends('layouts.guest.base')
@section('style')
    <style>

        @media (min-width: 992px) {
            #main {
                height: 100vh;
            }

            #main .col-md-6 {
                height: 100%;
            }

            #main .right{
                overflow-y: auto;
            }

        }

        #main .left h1 {
            font-size: 3rem;
            font-weight: bolder;
            margin-bottom: 3rem;
        }

        #main .left {
            padding-left: 100px;
            padding-top: 200px;
            background:linear-gradient(rgba(14, 15, 41, 0.81),rgba(14, 15, 41, 0.81)),url("{{asset('img/agri.jpg')}}");
            background-size: cover;
            color: white;
            box-shadow: 0px 0px 20px  #0e0f29;
        }
        #main .right {
            padding-top: 100px;
        }

        #main label {
            color:#2E3192;
        }

        @keyframes icon-animated-mvt {
            0% {
                font-size: 1.6rem;
            }
            50% {
                font-size: 1.7rem;
            }
            100% {
                font-size: 1.6rem;
            }
        }

        .icon-animated {
            -webkit-animation: 4s icon-animated-mvt infinite forwards;
            -o-animation: 4s icon-animated-mvt infinite forwards;
            animation: 4s icon-animated-mvt infinite forwards;
        }


    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center" id="main">
            <div class="col-md-6 d-none d-md-block left">
                <h1>Inscription</h1>
                <h3>Inscrivez-vous sur <span class="text-orange icon-animated">Farmdroid</span>
                    <br>
                    Et digitaliser votre production <i class="fas fa-thumbs-up icon-animated"></i></h3>
            </div>
            <form method="post" enctype="multipart/form-data" action="{{route('guest.register.store')}}" class="col-md-6 right pb-5">
                {{csrf_field()}}
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="name">Nom <span class="oblig">*</span></label>
                            <input name="name" id="name" value="{{old('name')}}" class="form-control"/>
                            @if($errors->has('name'))
                                <span class="oblig">{{$errors->first('name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="first_name">Prénom <span class="oblig">*</span></label>
                            <input name="first_name" id="first_name" value="{{old('first_name')}}" class="form-control"/>
                            @if($errors->has('first_name'))
                                <span class="oblig">{{$errors->first('first_name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="avatar">Photo de profil <span class="oblig">*</span></label>
                            <input accept=".png,.jpeg,.jpg,.gif" class="form-control" type="file" name="avatar" value="{{old('avatar')}}" id="avatar">
                            @if($errors->has('avatar'))
                                <span class="oblig">{{$errors->first('avatar')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Email <span class="oblig">*</span></label>
                            <input type="email" class="form-control" value="{{old('email')}}" name="email" id="email">
                            @if($errors->has('email'))
                                <span class="oblig">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="tel">Téléphone <span class="oblig">*</span></label>
                            <input type="tel" class="form-control" value="{{old('tel')}}" name="tel" id="tel">
                            @if($errors->has('tel'))
                                <span class="oblig">{{$errors->first('tel')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe <span class="oblig">*</span></label>
                            <input type="password" class="form-control" value="{{old('password')}}" id="password" name="password">
                            @if($errors->has('password'))
                                <span class="oblig">{{$errors->first('password')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirmation du mot de passe <span class="oblig">*</span></label>
                            <input type="password" class="form-control" id="password_confirmation" value="{{old('password_confirmation')}}" name="password_confirmation">
                            @if($errors->has('password_confirmation'))
                                <span class="oblig">{{$errors->first('password_confirmation')}}</span>
                            @endif
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-blue">Enregistrer</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')
@endsection