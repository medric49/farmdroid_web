@extends('layouts.member.base')
@section('title','Accueil')
@section('style')
    <style>
        .home-block {
            background-color: #fafafa;
            border-radius: 5px;
            padding : 10px
        }

        .icon-img-transformation {
            width: 50px;
            height: 50px;
            border-radius: 100px;
        }

        .b-0 {
            border-color: dodgerblue;
            color: dodgerblue;
            background-color: rgba(30, 144, 255, 0.17);
        }

        .b-1 {
            border-color: red;
            color: red;
            background-color: rgba(255, 0, 0, 0.3);
        }

        .bl {
            border: 3px solid;
            padding: 5px 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .bl h2 {
            text-align: right;
        }
    </style>
@endsection

@section('content')
    <main class="container pt-5">
        <div class="row">
            <h3 class="col-12 text-center">Etat du système</h3>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="bl {{$property->flag_arrosage==1?'b-1':'b-0'}}">
                    <h5>Arrosage</h5>
                    <h2>{{$property->flag_arrosage==-1?'#': ($property->flag_arrosage==0?'Eteint':'Allumé') }}</h2>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="bl {{$property->flag_eclairage==1?'b-1':'b-0'}}">
                    <h5>Eclairage</h5>
                    <h2>{{$property->flag_eclairage==-1?'#': ($property->flag_eclairage==0?'Eteint':'Allumé') }}</h2>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="bl {{$property->security_flag==1?'b-1':'b-0'}}">
                    <h5>Securité</h5>
                    <h2>{{$property->security_flag==-1?'#': ($property->security_flag==0?'Sure':'Dangé') }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <h3 class="col-12 text-center">Evolution de la témperature</h3>
        </div>

        <div class="row">
            <div class="col-12">
                <canvas id="lineChart-1"></canvas>
            </div>
        </div>

        <div class="row">
            <h3 class="col-12 text-center">Evolution de l'humidité</h3>
        </div>

        <div class="row">
            <div class="col-12">
                <canvas id="lineChart-2"></canvas>
            </div>
        </div>
    </main>
@endsection

@section('script')
    <script src="/js/Chart.min.js"></script>
    <script>


        //line
        var ctxL = document.getElementById("lineChart-1").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: {!! json_encode($label1) !!} ,
                datasets: [
                    {
                        backgroundColor: [
                            'rgba(120, 137, 132, .3)',
                        ],
                        borderColor: [
                            'rgba(0, 10, 130, .7)',
                        ],
                        data: {{json_encode($data1)}}
                    }
                ]
            },
            options: {
                responsive: true,
                legend: false
            }
        });

        //line
        var ctxL = document.getElementById("lineChart-2").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: {!! json_encode($label2)  !!},
                datasets: [
                    {
                        backgroundColor: [
                            'rgba(120, 137, 132, .3)',
                        ],
                        borderColor: [
                            'rgba(0, 10, 130, .7)',
                        ],
                        data: {{json_encode($data2)}}
                    }
                ]
            },
            options: {
                responsive: true,
                legend: false
            }
        });


    </script>
@endsection