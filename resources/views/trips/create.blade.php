@extends ('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Créer un Parcours</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif               
                         <form method="POST" action="/trips/store">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01">Thématique</label>
                                <input type="text" class="form-control" name="theme" value="" required>
                                @if ($errors->has('theme'))
                                <span class="alert alert-success" role="alert">
                                    <strong>{{ $errors->first('theme') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01">Titre</label>
                                <input type="text" class="form-control" name="title" value="" required>
                                @if ($errors->has('title'))
                                <span class="alert alert-success" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01">Description courte</label>
                                <textarea class="form-control" name="shortdescription" value="" required></textarea>
                                @if ($errors->has('shortdescription'))
                                <span class="alert alert-success" role="alert">
                                    <strong>{{ $errors->first('shortdescription') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01">Lieux favoris</label>
                                <input type="text" class="form-control" name="favoriteplaces" value="" required>
                                @if ($errors->has('favoriteplaces'))
                                <span class="alert alert-success" role="alert">
                                    <strong>{{ $errors->first('favoriteplaces') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01">Durée du parcours</label>
                                <input type="text" class="form-control" name="duration" value="" required>
                                @if ($errors->has('duration'))
                                <span class="alert alert-success" role="alert">
                                    <strong>{{ $errors->first('duration') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01">Prix</label>
                                <input type="text" class="form-control" name="price" value="" required>
                                @if ($errors->has('price'))
                                <span class="alert alert-success" role="alert">
                                    <strong>{{ $errors->first('price') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div>
                            <input type="checkbox" name="published" value="">
                            <label for="validationTooltip02">Publié ?</label>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationTooltip03"></label>
                                <textarea class="form-control" id="" rows="3" name="content" value="" required></textarea>
                                @if ($errors->has('content'))
                                <span class="alert alert-success" role="alert">
                                    <strong>{{ $errors->first('content') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>@endsection