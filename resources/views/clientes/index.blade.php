@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/b-2.1.1/r-2.2.9/datatables.min.css"/>
@endsection
@section('content')
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                                <a href="clientes/create" class="btn btn-success" style="margin-bottom: 10px;">Crear</a>
                                <table id="example" class="table table-bordered">
                                    <thead style="background-color:#6777ef">
                                        <tr>
                                            <th scope="col" style="display: none;">Id</th>
                                            <th scope="col" style="color:#fff;">Cliente Nombre</th>
                                            <th scope="col" style="color:#fff;">Cliente cédula</th>
                                            <th scope="col" style="color:#fff;">Teléfono</th>
                                            <th scope="col" style="color:#fff;">Email Juzgado</th>
                                            <th scope="col" style="color:#fff;">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($clientes as $cliente)
                                        <tr>
                                            <td style="display: none;">{{$cliente->id}}</td>
                                            <td>{{$cliente->clienteNombre}}</td>
                                            <td>{{$cliente->clienteCedula}}</td>
                                            <td>{{$cliente->telefono}}</td>
                                            <td>{{$cliente->emailCliente}}</td>
                                            <td>
                                                <form action="{{route('clientes.destroy',$cliente->id)}}" method="POST">
                                                <a href="/clientes/{{$cliente->id}}/edit" class="btn btn-info"><i class="fas fa-edit"></i></a>
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
                                            <th scope="col" style="display: none;">Id</th>
                                            <th scope="col">Cliente Nombre</th>
                                            <th scope="col">Cliente cédula</th>
                                            <th scope="col">Teléfono</th>
                                            <th scope="col">Email</th>
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