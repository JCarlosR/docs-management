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
                            <button type="button" id="click" class="btn btn-info btn-rounded w-md waves-effect waves-light m-b-5 m-t-15">Mostrar guía</button>
                        </div>
                    </div><!-- Row -->
                </div><!-- Sortable -->
            </div>

        </div>

    </div>
@endsection

@section('scripts')
    <script src="{{ asset('plugins/hopscotch/js/hopscotch.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            var placementRight = 'right';
            var placementLeft = 'left';

            // Define the tour!
            var tour = {
                id: "my-intro",
                steps: [
                    {
                        target: "logo-tour",
                        title: "Nuevo documento",
                        content: "Permite archivar y clasificar un nuevo documento en el sistema.",
                        placement: placementRight,
                        yOffset: 10
                    },
                    {
                        target: 'page-title-tour',
                        title: "Consultar documentos:",
                        content: "Permite buscar documentos en el sistema aplicando diversos filtros de búsqueda.",
                        placement: placementRight,
                        yOffset: 10
                    }
                ],
                showPrevButton: true
            };

            // Start the tour!
            $(function() {
                $('#click').on('click', onTourChange);
            });
            function onTourChange() {
                return hopscotch.startTour(tour);
            }
        });
    </script>
@endsection