@extends('layouts.app')

<style>

.container {
    color: #000;
}

.card {
    background-color: #E9E9E9 !important;
}

label {
    border-bottom: 1px #000;
}

.header {
    background-color: #CD1036;
    color: #fff;
    height: 47px;
    padding: 11px;
}

.title-field {
    border-bottom: 1px solid;
}

</style>

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="header font-weight-bold">{{ $trip -> title }}</div>

                <div class="card-body w-75 mx-auto">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif



                    <div class="form-group row title-field">
                        <label for="theme" class="col-form-label text-md-right font-weight-bold">Thématique</label>
                    </div>
                    <div class="form-group row justify-content-center">
                        <p> {{ $trip -> theme }}</p>
                    </div>


                    <div class="form-group row title-field">
                        <label for="title" class="col-form-label text-md-right font-weight-bold">Titre</label>
                    </div>
                    <div class="form-group row justify-content-center">
                        <p> {{ $trip -> title }}</p>
                    </div>


                    <div class="form-group row title-field">
                        <label for="description" class="col-form-label text-md-right font-weight-bold">Description</label>

                    </div>
                    <div class="form-group row justify-content-center">
                        <p> {{ $trip -> description }}</p>
                    </div>

                    <div class="form-group row title-field">
                        <label for="favorite_place" class="col-form-label text-md-right font-weight-bold">Lieu favoris</label>

                    </div>
                    <div class="form-group row justify-content-center">
                        <p> {{ $trip -> favorite_place }}</p>
                    </div>

                    <div class="form-group row title-field">
                        <label for="travel_time" class="col-form-label text-md-right font-weight-bold">Durée</label>

                    </div>
                    <div class="form-group row justify-content-center">
                        <p> {{ $trip -> travel_time }}</p>
                    </div>

                    <div class="form-group row title-field">
                        <label for="average_price" class="col-form-label text-md-right font-weight-bold">Prix moyen</label>

                    </div>
                    <div class="form-group row justify-content-center">
                        <p> {{ $trip -> average_price }}€</p>
                    </div>
                    
                    <div class="form-group row title-field">
                        <label for="transportation" class="col-form-label text-md-right font-weight-bold">Moyen de transport</label>
                    </div>

                    <div class="form-group row justify-content-center">
                        <p> {{ $trip -> transportation }}</p>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>


@endsection