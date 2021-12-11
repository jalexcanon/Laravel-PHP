@extends('layouts.app')

@section('content')
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                             <form action="/clientes" method="POST">
                                 @csrf
                                 <div class="mb-3">
                                     <label for="" class="form-label">Cliente Nombre</label>
                                     <input id="clienteNombre" name="clienteNombre" type="text" class="form-control" tabindex="2">
                                 </div>

                                 <div class="mb-3">
                                     <label for="" class="form-label">Cliente cédula</label>
                                     <input id="clienteCedula" name="clienteCedula" type="number" class="form-control" tabindex="3">
                                 </div>

                                 <div class="mb-3">
                                     <label for="" class="form-label">Teléfono</label>
                                     <input id="telefono" name="telefono" type="number" class="form-control" tabindex="4">
                                 </div>
                                 
                                 <div class="mb-3">
                                     <label for="" class="form-label">Email cliente</label>
                                     <input id="emailCliente" name="emailCliente" type="email" class="form-control" tabindex="5">
                                 </div>

                                 <a href="/clientes" class="btn btn-secondary" tabindex="14">Cancelar</a>
                                 <button type="submit" class="btn btn-primary"tabindex="13">Guardar</button>

                             </form>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection