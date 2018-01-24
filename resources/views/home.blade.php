@extends('layouts.app')

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="sortable">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="font-600">Por favor seleccione una opción del menú:</h4>
                            <ul>
                                <li>
                                    <h5>
                                        <strong><i class="fa fa-file-o m-r-5"></i><span>Nuevo documento:</span></strong>
                                        Permite archivar y clasificar un nuevo documento en el sistema.
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        <strong><i class="fa fa-files-o m-r-5"></i><span>Consultar documentos:</span></strong>
                                        Permite buscar documentos en el sistema aplicando diversos filtros de búsqueda.
                                    </h5>
                                </li>
                            </ul>
                        </div>
                    </div><!-- Row -->
                </div><!-- Sortable -->
            </div>

        </div>

    </div>
@endsection
