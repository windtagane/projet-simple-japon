@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Création article</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="/trips">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="theme" class="col-md-4 col-form-label text-md-right">Thématique</label>

                            <div class="col-md-6">
                                <input id="theme" type="text" class="form-control{{ $errors->has('theme') ? ' is-invalid' : '' }}" name="theme" value="{{ old('theme') }}" autofocus>

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
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" autofocus>

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
                                <textarea style="width: 100%" name="description" id="content" required>{{ old('description') }}</textarea>

                                @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="favorite_place" class="col-md-4 col-form-label text-md-right">Lieu favoris</label>

                            <div class="col-md-6">
                                <input id="favorite_place" type="text" class="form-control{{ $errors->has('favorite_place') ? ' is-invalid' : '' }}" name="favorite_place" value="{{ old('favorite_place') }}" autofocus>

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
                                <input id="travel_time" type="text" class="form-control{{ $errors->has('travel_time') ? ' is-invalid' : '' }}" name="travel_time" value="{{ old('travel_time') }}" autofocus>

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
                                <input id="average_price" type="text" class="form-control{{ $errors->has('average_price') ? ' is-invalid' : '' }}" name="average_price" value="{{ old('average_price') }}" autofocus>

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
                                <input id="transportation" type="text" class="form-control{{ $errors->has('transportation') ? ' is-invalid' : '' }}" name="transportation" value="{{ old('transportation') }}" autofocus>

                                @if ($errors->has('transportation'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('transportation') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection