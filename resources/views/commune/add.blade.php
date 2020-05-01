@extends('layout')
@section('content')
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Commune</a></li>
            <li class="breadcrumb-item active" aria-current="page">Enregistrer Commune</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
    <div class="container">
        <!-- Title -->
        <div class="hk-pg-header">
            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>Enregistrer Commune</h4>
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                        <div class="col-sm">
                            <form class="needs-validation" method="POST" action="{{ url('commune') }}" novalidate>
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="col-md-4 mb-10">
                                        <label for="validationCustom01">Nom commune</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Nom commune" name="nom"  required>
                                        <div class="invalid-feedback">
                                            Champ obligatoire
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-10">
                                        <label for="validationCustom01">Département</label>
                                        <select class="form-control custom-select" name="departement_id" required>
                                            <option value="">Sélectionner</option>
                                            @foreach($departements as $departement)
                                            <option value="{{ $departement->id }}">{{ $departement->nom }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">Région obligatoire</div>
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