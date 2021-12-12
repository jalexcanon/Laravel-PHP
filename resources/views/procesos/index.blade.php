@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css"> -->
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.bootstrap4.min.css"> -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/b-2.1.1/r-2.2.9/datatables.min.css"/>
@endsection
@section('content')
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12 table-responsive">
                    <div class="card">
                        <div class="card-body">
                                <a href="procesos/create" class="btn btn-success"   style="margin-bottom: 10px;">Crear</a>
                                <table id="example" class="table table-bordered display nowrap td-responsive" cellspacing="0" width="100%"> 
                                    <thead style="background-color:#6777ef">
                                        <tr>
                                            <th scope="col" style="color:#fff;">Ver más</th>
                                            <th scope="col" style="color:#fff;">Radicado</th>
                                            <th scope="col" style="color:#fff;">Cliente Nombre</th>
                                            <th scope="col" style="color:#fff;">Contraparte Nombre</th>
                                            <th scope="col" style="color:#fff;">Cliente cédula</>
                                            <th scope="col" style="color:#fff;">Contraparte cédula</th>
                                            <th scope="col" style="color:#fff;">Jurisdicción</th>
                                            <th scope="col" style="color:#fff;">Tipo</th>
                                            <th scope="col" style="color:#fff;">Año</th>
                                            <th scope="col" style="color:#fff;">Estado</th>
                                            <th scope="col" style="color:#fff;">Micrositio</th>
                                            <th scope="col" style="color:#fff;">Email Juzgado</th>
                                            <th scope="col" style="color:#fff;">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($procesos as $proceso)
                                        <tr>
                                            <td style="display: none;">{{$proceso->id}}</td>
                                            <td>{{$proceso->radicado}}</td>
                                            <td>{{$proceso->clienteNombre}}</td>
                                            <td>{{$proceso->contraparteNombre}}</td>
                                            <td>{{$proceso->clienteCedula}}</td>
                                            <td>{{$proceso->contraparteCedula}}</td>
                                            <td>{{$proceso->tipo}}</td>
                                            <td>{{$proceso->clase}}</td>
                                            <td>{{$proceso->anuo}}</td>
                                            <td>{{$proceso->estado}}</td>
                                            <td>{{$proceso->micrositio}}</td>
                                            <td>{{$proceso->emailjuzgado}}</td>
                                            <td>
                                                <form action="{{route('procesos.destroy',$proceso->id)}}" method="POST">
                                                <a href="/procesos/{{$proceso->id}}/edit" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th scope="col">Ver más</th>
                                            <th scope="col">Radicado</th>
                                            <th scope="col">Cliente Nombre</th>
                                            <th scope="col">Contraparte Nombre</th>
                                            <th scope="col">Cliente cédula</th>
                                            <th scope="col">Contraparte cédula</th>
                                            <th scope="col">Jurisdicción</th>
                                            <th scope="col">Tipo</th>
                                            <th scope="col">Año</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Micrositio</th>
                                            <th scope="col">Email Juzgado</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                 @section('js')
                                <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                                <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.3/b-2.1.1/r-2.2.9/datatables.min.js"></script>
                                <!-- <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> -->
                                <!-- <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script> -->
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
                                
                                >
                                <script>
                                        $(document).ready(function() {
                                            var table = $('#example').DataTable( {
                                                responsive: true,
                                            language: {
                                                sProcessing: "Procesando...",
                                                sZeroRecords: "No se encontraron resultados",
                                                sEmptyTable: "No hay ningún dato disponible en esta tabla",
                                                sInfoEmpty: "Mostrando registros del 0 al 0 de un total de 0",
                                                infoFiltered: "(Filtrado de _MAX_ total entradas)",
                                                lengthMenu: "Mostrar _MENU_ Entradas",
                                                info: "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                                                sInfoPostFix: "",
                                                sSearch: "Buscar:",
                                                sUrl: "",
                                                sInfoThousands: ",",
                                                sLoadingRecords: "Cargando...",
                                                oPaginate: {
                                                sFirst: "Primero",
                                                sLast: "Último",
                                                sNext: "Siguiente",
                                                sPrevious: "Anterior",
                                                },
                                            },
                                                lengthMenu: [5,10,25,50]
                                            } ); } );
                                </script>
                             @endsection
                            </div>  
                            </div>                      
                        </div>
                    </div>
                </div>
            </div>
    </section>
    @endsection