@extends('layout')

@section('content')
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Table de Bord</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
    <div class="container">
        <!-- Title -->
        <div class="hk-pg-header">
            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>Table de Bord</h4>
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <div class="col-sm">
                        <form class="needs-validation" method="POST" action="{{ url('recherche') }}" novalidate>
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="col-md-4 mb-10">
                                    <label for="validationCustom01">Date Debut</label>
                                    <input type="date" class="form-control  @error('debut') is-invalid @enderror" id="validationCustom01" placeholder="Date Debut" name="debut"  required>
                                    <div class="invalid-feedback">
                                        Champ obligatoire
                                    </div>
                                    @error('debut')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-10">
                                    <label for="validationTooltipUsername">Date fin</label>
                                    <input type="date" class="form-control @error('fin') is-invalid @enderror" name="fin" value="{{ old('fin') }}" id="validationTooltipUsername" placeholder="Date Fin" aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                        Champ obligatoire
                                    </div>
                                    @error('fin')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-10">
                                    <label for="validationCustom01">Categorie</label>
                                    <select class="form-control custom-select" name="categorie" required>
                                        <option value="">Sélectionner</option>
                                        <option value="casSuspect">Cas Suspect</option>
                                        <option value="actionIec">Action IEC</option>
                                       <!--  <option value="alerte">Alerte</option>-->
                                        <option value="risque">Lieu à haut Risque</option>
                                        <option value="logistique">Logistique</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-10">
                                    <label for="validationCustom01">Commune</label>
                                    <select class="commune form-control custom-select" name="commune_id" id="commune" >
                                        <option value="">Sélectionner</option>
                                        @foreach($communes as $commune)
                                            <option value="{{  $commune->id }}">{{  $commune->nom }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Commune obligatoire</div>
                                </div>
                                <div class="col-md-4 mb-10">
                                    <label for="validationCustom01">ASC</label>
                                    <select class="form-control custom-select" name="asc" id="bodyData">


                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Rechercher</button>
                        </form>
                    </div>
                    @if($actions)
                    <h5 class="hk-sec-title">Liste des Actions IEC</h5>
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <table id="datable_1" class="table table-hover w-100 display pb-30">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Libelle</th>
                                        <th>Commentaire</th>
                                        <th>image</th>
                                        <th>Nom</th>
                                        <th>ASC</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($actions as $action)
                                        <tr>
                                            <td>{{$action->id}}</td>
                                            <td>{{$action->libelle}}</td>
                                            <td>{{$action->commentaire}}</td>
                                            <td>@if($action->image) <img src="{{$action->image}}" class="avatar-img rounded-circle"> @endif</td>
                                            <td> {{ $action->name }}</td>
                                            <td>{{$action->asc}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Libelle</th>
                                        <th>Commentaire</th>
                                        <th>image</th>
                                        <th>Nom</th>
                                        <th>ASC</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($suspects)
                    <h5 class="hk-sec-title">Liste des Cas suspect</h5>
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <table id="datable_1" class="table table-hover w-100 display pb-30">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Commentaire</th>
                                        <th>image</th>
                                        <th>Nom</th>
                                        <th>ASC</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($suspects as $suspect)
                                        <tr>
                                            <td>{{$suspect->id}}</td>
                                            <td>{{$suspect->commentaire}}</td>
                                            <td>@if($suspect->image) <img src="{{$suspect->image}}" class="avatar-img rounded-circle"> @endif</td>
                                            <td>{{ $suspect->name }}</td>
                                            <td>{{$suspect->asc}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Libelle</th>
                                        <th>Commentaire</th>
                                        <th>image</th>
                                        <th>Nom</th>
                                        <th>ASC</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($risques)
                    <h5 class="hk-sec-title">Liste de la Logistique</h5>
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <table id="datable_1" class="table table-hover w-100 display pb-30">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Lieu</th>
                                        <th>Situation</th>
                                        <th>Commentaire</th>
                                        <th>image</th>
                                        <th>Nom</th>
                                        <th>ASC</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($risques as $risque)
                                        <tr>
                                            <td>{{$risque->id}}</td>
                                            <td>{{$risque->lieu}}</td>
                                            <td>{{$risque->situation}}</td>
                                            <td>{{$risque->commentaire}}</td>
                                            <td>@if($risque->image) <img src="{{$risque->image}}" class="avatar-img rounded-circle"> @endif</td>
                                            <td> {{ $risque->name }}</td>
                                            <td>{{$risque->asc}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Lieu</th>
                                        <th>Situation</th>
                                        <th>Commentaire</th>
                                        <th>image</th>
                                        <th>Nom</th>
                                        <th>ASC</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($logistiques)
                    <h5 class="hk-sec-title">Liste de la Logistique</h5>
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <table id="datable_1" class="table table-hover w-100 display pb-30">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Type</th>
                                        <th>Situation</th>
                                        <th>Commentaire</th>
                                        <th>image</th>
                                        <th>Nom</th>
                                        <th>ASC</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($logistiques as $logistique)
                                        <tr>
                                            <td>{{$logistique->id}}</td>
                                            <td>{{$logistique->lieu}}</td>
                                            <td>{{$risque->situation}}</td>
                                            <td>{{$logistique->commentaire}}</td>
                                            <td>@if($logistique->image) <img src="{{$logistique->image}}" class="avatar-img rounded-circle"> @endif</td>
                                            <td> {{ $logistique->name }}</td>
                                            <td>{{$logistique->asc}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Lieu</th>
                                        <th>Situation</th>
                                        <th>Commentaire</th>
                                        <th>image</th>
                                        <th>Nom</th>
                                        <th>ASC</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($alertes)
                    <h5 class="hk-sec-title">Liste des alertes</h5>
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <table id="datable_1" class="table table-hover w-100 display pb-30">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Description</th>
                                        <th>Téléphone</th>
                                        <th>image</th>
                                        <th>Nom</th>
                                        <th>ASC</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($alertes as $alerte)
                                        <tr>
                                            <td>{{$alerte->id}}</td>
                                            <td>{{$alerte->description}}</td>
                                            <td>{{$alerte->telephone}}</td>
                                            <td>@if($alerte->image) <img src="{{$alerte->image}}" class="avatar-img rounded-circle"> @endif</td>
                                            <td>{{ $alerte->name }}</td>
                                            <td>{{$alerte->asc}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Description</th>
                                        <th>Téléphone</th>
                                        <th>image</th>
                                        <th>Nom</th>
                                        <th>ASC</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endif
                </section>
            </div>
        </div>

    </div>
@endsection
@section('script')
    <script>
            $(".commune").change(function () {
               /* $( ".commune option:selected" ).each(function() {
                    str +=
                });*/
               // var str = document.getElementById('commune').value;
                //alert("Handler for .change() called." + str);
                var selectedCommune = $(this).children("option:selected").val();
               // alert("You have selected the country - " + selectedCountry);
               var bodyData = " <option value=''>Sélectionner</option>";
                $.ajax({
                    type:'GET',
                    url:'/get/asc/commune/'+selectedCommune,
                    data:'_token = <?php echo csrf_token() ?>',
                    success:function(data) {
                        console.log(data);
                        //var bodyData = " <option value=''>Sélectionner</option>";
                        $.each(data,function(index,row){
                            bodyData +="<option value='"+row.asc+"'>"+row.asc+"</option>"
                        });
                        $("#bodyData").html(bodyData);
                    }
                });

            });

    </script>
    <script src="{{asset('dist/js/validation-data.js')}}"></script>
    <script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset('vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{asset('vendors/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{asset('vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{asset('vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{asset('vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{asset('vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{asset('dist/js/dataTables-data.js') }}"></script>

@endsection
