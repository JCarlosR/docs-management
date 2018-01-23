@extends('layouts.app')

@section('styles')
    <!-- Plugins css-->
    <link href="{{ asset('plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
@endsection

@section('page-title')
    <a href="/home"><i class="zmdi zmdi-collection-text m-r-5"></i>Mis documentos</a> >
    <i class="zmdi zmdi-collection-plus m-r-5"></i>Registrar
@endsection

@section('content')

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            @if (session('notification'))
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('notification') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form role="form"  action="" method="POST">
                    {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-6">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-20">Subir nuevo documento escaneado</h4>
                        <div class="form-group">
                            <label class="control-label col-sm-4">Fecha</label>
                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" value="{{ old('started_at', date('m/d/Y')) }}">
                        </div>
                        <div class="form-group">
                            <label for="category_id">Categoría</label>
                            <select name="category_id" class="form-control">
                                <option value="">Seleccione</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="severity">Subcategoria</label>
                            <select name="severity" class="form-control">
                                <option value="">Seleccione</option>
                                <option value="M">Menor</option>
                                <option value="N">Normal</option>
                                <option value="A">Alta</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Archivo</label>
                            <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Cargue archivos en formato imagen, PDF o documentos en Word (.doc o .docx)</small>
                        </div>
                        <div class="form-group">
                            <a href="/documents" class="btn btn-default">
                                Cancelar
                            </a>
                            <button class="btn btn-primary">
                                Registrar documento
                                <i class="fa fa-save"></i>
                            </button>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
            </form>
        </div> <!-- container -->
    </div> <!-- content -->

    <footer class="footer">
        2017 © Selektools.
    </footer>

</div>
@endsection

@section('scripts')
    <script src="{{ asset('plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script>
        jQuery('#datepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
    </script>
@endsection

