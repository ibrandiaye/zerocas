@extends('layout')
@section('content')
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Article</a></li>
            <li class="breadcrumb-item active" aria-current="page">Modifier Article</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
    <div class="container">
        <!-- Title -->
        <div class="hk-pg-header">
            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>Modifier Article</h4>
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <div class="col-sm">
                        <form class="needs-validation" method="POST" action="{{ URL('article/'.$article->id) }}" enctype="multipart/form-data" novalidate>
                            @method('PUT')
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="col-md-4 mb-10">
                                    <label for="validationCustom01">Titre</label>
                                    <input type="text" class="form-control" id="validationCustom01" value="{{$article->titre}}" placeholder="Titre" name="titre"  required>
                                    <div class="invalid-feedback">
                                        Champ obligatoire
                                    </div>
                                </div>
                                <div class="col-md-4 mb-10">
                                    <label for="validationCustom01">Image</label>
                                    <input type="file" class="form-control" name="img"  id="validatedCustomFile" required>

                                    <div class="invalid-feedback">Erreur</div>
                                </div>
                                <div class="col-md-4 mb-10">
                                    <label>URL Vidéo</label>
                                    <input type="text" class="form-control"  placeholder="Titre" name="video"   value="{{$article->video}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm">
                                    <label for="validationCustom01">Contenu</label>
                                    <div class="tinymce-wrap">
                                        <textarea class="tinymce" name="desciption" >{{$article->desciption}}</textarea>
                                    </div>
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
    <!-- Tinymce JavaScript -->
    <script src="{{asset('vendors/tinymce/tinymce.min.js')}}"></script>

    <!-- Tinymce Wysuhtml5 Init JavaScript -->
    <script src="{{asset('dist/js/tinymce-data.js')}}"></script>
    <!-- Bootstrap Tagsinput JavaScript -->
    <script src="{{asset('vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>

    <!-- Bootstrap Input spinner JavaScript -->
    <script src="{{asset('vendors/bootstrap-input-spinner/src/bootstrap-input-spinner.js')}}"></script>
    <script src="{{asset('dist/js/inputspinner-data.js')}}"></script>
@endsection