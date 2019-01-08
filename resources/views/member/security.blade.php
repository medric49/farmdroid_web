@extends('layouts.member.base')

@section('title","Securité')

@section('content')
    <main class="container pt-5">
        <div class="row">
            <h3 class="col-12 text-center">Liste des alertes</h3>
        </div>
        <div class="row">
            <div class="col-12">
                @if(count($securities))

                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">Heure</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($securities as $index=>$security)
                            <tr>
                                <th scope="row">{{$index+1}}</th>
                                <td>{{$security->created_at->format('d - m - Y')}}</td>
                                <td>{{$security->created_at->format('h:i')}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    @else
                    <h5 class="text-center text-muted">Aucun danger enregistrer</h5>
                    @endif

            </div>
        </div>
    </main>
@endsection