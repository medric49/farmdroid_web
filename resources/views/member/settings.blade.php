@extends('layouts.member.base')

@section('title","Configurations')

@section('style')
    <style>
        .setting .col-5 {
            color: dodgerblue;
        }
    </style>
    @endsection

@section('content')
    <main class="container pt-5">
        <div class="row">
            <h3 class="col-12 text-center">
                Configurations
            </h3>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <div class="row setting">

                    <div class="col-7">Température Maximale (T°)</div>
                    <div class="col-5">{{$property->temp_max}}</div>

                    <div class="col-7">Humidité Maximale (%)</div>
                    <div class="col-5">{{$property->hum_max==-1?'Non définie':$property->hum_max}}</div>

                    <div class="col-7">Acidité Maximale (ph)</div>
                    <div class="col-5">{{$property->aci_max==-1?'Non définie':$property->aci_max }}</div>

                    <div class="col-7">Luminosité Maximal (%)</div>
                    <div class="col-5">{{$property->light_max==-1?'Non définie':$property->light_max}}</div>

                    <div class="col-7">Rayon de sécurité</div>
                    <div class="col-5">{{$property->dist_max==-1?'Non défini':$property->dist_max}}</div>

                    <div class="col-7">Arrosage automatique</div>
                    <div class="col-5">{{$property->arrosage_auto==-1?'Non défini':($property->arrosage_auto==1?'Oui':'Non')}}</div>

                    <div class="col-7">Eclairage Automatique</div>
                    <div class="col-5">{{$property->eclairage_auto==-1?'Non défini':($property->eclairage_auto==1?'Oui':'Non')}}</div>

                    <div class="col-7">Securité Active</div>
                    <div class="col-5">{{$property->security_auto==-1?'Non définie':($property->security_auto==1?'Oui':'Non')}}</div>
                </div>
            </div>
        </div>

    </main>
@endsection