@extends('layouts.app')

@section('styles')

@endsection

@section('page-title')
<i class="zmdi zmdi-collection-text m-r-5"></i>Categoria seleccionada: {{ $category->name }}
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

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-3">
                                    <select name="category_id" class="form-control">
                                        <option value="">Seleccione subcategoría</option>
                                        @foreach($category->subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <select name="category_id" class="form-control select2">
                                        <option>Seleccione año</option>
                                        @for($year = 1900; $year<=2018 ;$year++)
                                            <option value="{{ $year }}">{{ $year }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <select name="category_id" class="form-control">
                                        <option value="">Seleccione mes</option>
                                        <option value="1">Enero</option>
                                        <option value="2">Febrero</option>
                                        <option value="3">Marzo</option>
                                        <option value="4">Abril</option>
                                        <option value="5">Mayo</option>
                                        <option value="6">Junio</option>
                                        <option value="7">Julio</option>
                                        <option value="8">Agosto</option>
                                        <option value="9">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Noviembre</option>
                                        <option value="12">Diciembre</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <button class="btn btn-trans btn-inverse" title="buscar"><i class="fa fa-search m-r-5"> Aplicar filtros</i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <table class="table table-bordered">
                                <thead>
                                <tr class="active">
                                    <th class="text-center col-sm-1">ID</th>
                                    <th class="text-center col-sm-3">Fecha</th>
                                    <th class="text-center  col-sm-5">Subido por</th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--@foreach($documents as $document)--}}
                                <tr>
                                    <td class="text-center">id</td>
                                    <td class="text-center">Fecha</td>
                                    <td class="text-center">Por quien</td>
                                    <td class="text-center">
                                        <a href="/documents/id/consult" class="btn btn-sm btn-success" title="Ver">
                                            <i class="fa fa-eye"> Ver</i>
                                        </a>
                                        <a href="/documents/id/consult" class="btn btn-sm btn-success" title="Imprimir">
                                            <i class="fa fa-print"> Imprmir</i>
                                        </a>
                                    </td>
                                </tr>
                                {{--@endforeach--}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function() {
            $(".select2").select2();

            $(".select2-limiting").select2({
                maximumSelectionLength: 2
            });
        });
    </script>
@endsection
