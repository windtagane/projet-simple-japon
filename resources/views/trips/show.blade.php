@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $trip -> title }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif



                    <div class="form-group row">
                        <label for="theme" class="col-md-4 col-form-label text-md-right font-weight-bold">Thématique</label>
                        
                    </div>
                    <div class="form-group row col-8 justify-content-center">
                        <p> {{ $trip -> theme }}</p>
                    </div>


                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label text-md-right font-weight-bold">Titre</label>


                    </div>
                    <div class="form-group row col-8 justify-content-center">
                        <p> {{ $trip -> title }}</p>
                    </div>


                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right font-weight-bold">Description</label>

                    </div>
                    <div class="form-group row col-8 justify-content-center">
                        <p> {{ $trip -> description }}</p>
                    </div>

                    <div class="form-group row">
                        <label for="favorite_place" class="col-md-4 col-form-label text-md-right font-weight-bold">Lieu favoris</label>

                    </div>
                    <div class="form-group row col-8 justify-content-center">
                        <p> {{ $trip -> favorite_place }}</p>
                    </div>

                    <div class="form-group row">
                        <label for="travel_time" class="col-md-4 col-form-label text-md-right font-weight-bold">Durée</label>

                    </div>
                    <div class="form-group row col-8 justify-content-center">
                        <p> {{ $trip -> travel_time }}</p>
                    </div>

                    <div class="form-group row">
                        <label for="average_price" class="col-md-4 col-form-label text-md-right font-weight-bold">Prix moyen</label>

                    </div>
                    <div class="form-group row col-8 justify-content-center">
                        <p> {{ $trip -> average_price }}€</p>
                    </div>

                    <div class="form-group row">
                        <label for="transportation" class="col-md-4 col-form-label text-md-right font-weight-bold">Moyen de transport</label>
                        <p> {{ $trip -> transportation }}</p>
                        
                    </div>
                    <div class="form-group row col-2 justify-content-center">
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>


@endsection