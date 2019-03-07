@extends('layouts.app')

<style>
    
    .container {
        color: #000;
    }

    .card {
        background-color: #E9E9E9 !important;
    }

    .header {
        background-color: #CD1036;
        color: #fff;
        height: 47px;
        padding: 11px;
    }

    .btn {
        background-color: #CD1036;
    }

    .btn:hover {
        background-color: #B30E2F;
    }

    a.btn {
        color: #fff;
    }

    a.btn:hover {
        color: #fff;
    }

</style>



@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="header font-weight-bold">Modification parcours</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('trips.update', $trip->id) }}">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="theme" class="col-md-4 col-form-label text-md-right">Thématique</label>

                            <div class="col-md-6">
                                <input id="theme" type="text" class="form-control{{ $errors->has('theme') ? ' is-invalid' : '' }}" name="theme" value="{{ $trip -> theme }}" autofocus>

                                @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Titre</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $trip -> title }}" autofocus>

                                @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <textarea style="width: 100%" name="description" id="content" required>{{ $trip -> description }}</textarea>

                                @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="favorite_place" class="col-md-4 col-form-label text-md-right">Lieu favori</label>

                            <div class="col-md-6">
                                <input id="favorite_place" type="text" class="form-control{{ $errors->has('favorite_place') ? ' is-invalid' : '' }}" name="favorite_place" value="{{ $trip -> favorite_place }}" autofocus>

                                @if ($errors->has('favorite_place'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('favorite_place') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="travel_time" class="col-md-4 col-form-label text-md-right">Durée</label>

                            <div class="col-md-6">
                                <input id="travel_time" type="text" class="form-control{{ $errors->has('travel_time') ? ' is-invalid' : '' }}" name="travel_time" value="{{ $trip -> travel_time }}" autofocus>

                                @if ($errors->has('travel_time'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('travel_time') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        


                        <div class="form-group row">
                            <label for="average_price" class="col-md-4 col-form-label text-md-right">Prix moyen (en €)</label>

                            <div class="col-md-6">
                                <input id="average_price" type="text" class="form-control{{ $errors->has('average_price') ? ' is-invalid' : '' }}" name="average_price" value="{{ $trip -> average_price }}" autofocus>

                                @if ($errors->has('average_price'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('average_price') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="transportation" class="col-md-4 col-form-label text-md-right">Moyen de transport</label>

                            <div class="col-md-6">
                                <input id="transportation" type="text" class="form-control{{ $errors->has('transportation') ? ' is-invalid' : '' }}" name="transportation" value="{{ $trip -> transportation }}" autofocus>

                                @if ($errors->has('transportation'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('transportation') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn">Modifier</button>
                                    <a href="{{ url('/home') }}" class="btn btn-danger">Annuler</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection