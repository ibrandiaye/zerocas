@extends('layout')
@section('content')
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Departement</a></li>
            <li class="breadcrumb-item active" aria-current="page">Modifier Departement</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
    <div class="container">
        <!-- Title -->
        <div class="hk-pg-header">
            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>Modifier Departement</h4>
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <div class="col-sm">
                        <form class="needs-validation" method="POST" action="{{ URL('user/'.$user->id) }}" novalidate>
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="col-md-4 mb-10">
                                    <label for="validationCustom01">Nom</label>
                                    <input type="text" value="{{$user->name}}" class="form-control  @error('name') is-invalid @enderror" id="validationCustom01" placeholder="Nom Complet" name="name"  required>
                                    <div class="invalid-feedback">
                                        Champ obligatoire
                                    </div>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-10">
                                    <label for="validationTooltipUsername">Email</label>
                                    <input type="email" value="{{$user->email}}" class="form-control @error('email') is-invalid @enderror" name="email"  id="validationTooltipUsername" placeholder="Email" aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                        Champ obligatoire ou email invalide
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-10">
                                    <label for="validationCustom01">ASC</label>
                                    <input type="text" value="{{$user->asc}}" class="form-control" name="asc" placeholder="Nom ASC"  >
                                </div>
                                <div class="col-md-4 mb-10">
                                    <label for="validationCustom01">Mot de passe</label>
                                    <input type="password" value="" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Mot de passe"   >
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-10">
                                    <label for="validationCustom01">Répéter Mot de passe</label>
                                    <input type="password" value=""  name="password_confirmation" class="form-control" placeholder="Répéter Mot de passe"   >
                                </div>
                                <div class="col-md-4 mb-10">
                                    <label for="validationCustom01">Role</label>
                                    <select class="form-control custom-select" name="role" required>
                                        <option value="">Sélectionner</option>
                                        <option value="president">Président ASC</option>
                                        <option value="oncav">Membre ONCAV</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-10">
                                    <label for="validationCustom01">Commune</label>
                                    <select class="form-control custom-select" name="commune_id" required>
                                        <option value="">Sélectionner</option>
                                        @foreach($communes as $commune)
                                            <option value="{{  $commune->id }}">{{  $commune->nom }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Commune obligatoire</div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Enregistrer</button>
                        </form>
                    </div>

                </section>
            </div>
        </div>

    </div>
@endsection
@section('script')
    <script src="{{asset('dist/js/validation-data.js')}}"></script>
@endsection