@extends('layouts.app')

@section('icon')

@endsection

@section('page-title')
<i class="zmdi zmdi-collection-text m-r-5"></i>Consultar documentos
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
                    <div class="col-sm-8">
                        <a href="documents/crear" class="btn btn-primary btn-md waves-effect waves-light m-b-30">
                            <i class="zmdi zmdi-collection-plus m-r-5"></i> Nuevo documento
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card-box">
                            <table class="table table-bordered">
                                <thead>
                                <tr class="active">
                                    <th>Categoría</th>
                                    <th class="text-center">Opción</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td class="text-center">
                                        <a href="/documents/{{ $category->id }}/consult" class="btn btn-sm btn-success" title="Consultar">
                                            <i class="fa fa-eye"> Ver</i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
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

@endsection
