@extends('layouts.app')

@section('content')
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                             <form action="/procesos/{{$proceso->id}}" method="POST">
                                 @csrf
                                 @method('PUT')
                                 <div class="mb-3">
                                     <label for="" class="form-label">Radicado</label>
                                     <input id="radicado" name="radicado" type="text" class="form-control" value="{{$proceso->radicado}}">
                                 </div>"

                                 <div class="mb-3">
                                     <label for="" class="form-label">Cliente nombre</label>
                                     <input id="clienteNombre" name="clienteNombre" type="text" class="form-control" value="{{$proceso->clienteNombre}}">
                                 </div>

                                 <div class="mb-3">
                                     <label for="" class="form-label">Contraparte nombre</label>
                                     <input id="contraparteNombre" name="contraparteNombre" type="text" class="form-control" value="{{$proceso->contraparteNombre}}">
                                 </div>

                                 <div class="mb-3">
                                     <label for="" class="form-label">Cliente cédula</label>
                                     <input id="clienteCedula" name="clienteCedula" type="number" class="form-control" value="{{$proceso->clienteCedula}}">
                                 </div>
                                 
                                 <div class="mb-3">
                                     <label for="" class="form-label">Contraparte cédula</label>
                                     <input id="contraparteCedula" name="contraparteCedula" type="number" class="form-control" value="{{$proceso->contraparteCedula}}">
                                 </div>

                                 <div class="mb-3">
                                     <label for="" class="form-label">Jurisdicción</label>
                                     <input id="tipo" name="tipo" type="text" class="form-control" value="{{$proceso->tipo}}">
                                 </div>

                                 <div class="mb-3">
                                     <label for="" class="form-label">Tipo</label>
                                     <input id="clase" name="clase" type="text" class="form-control" value="{{$proceso->clase}}">
                                 </div>

                                 <div class="mb-3">
                                     <label for="" class="form-label">Año</label>
                                     <input id="anuo" name="anuo" type="text" class="form-control" value="{{$proceso->anuo}}">
                                 </div>

                                 <div class="mb-3">
                                     <label for="" class="form-label">Estado</label>
                                     <input id="estado" name="estado" type="text" class="form-control" value="{{$proceso->estado}}">
                                 </div>

                                 <div class="mb-3">
                                     <label for="" class="form-label">Micrositio</label>
                                     <input id="micrositio" name="micrositio" type="text" class="form-control" value="{{$proceso->micrositio}}">
                                 </div>
                                 
                                 <div class="mb-3">
                                     <label for="" class="form-label">Email Juzgado</label>
                                     <input id="emailjuzgado" name="emailjuzgado" type="email" class="form-control" value="{{$proceso->emailjuzgado}}">
                                 </div>

                                 <a href="/procesos" class="btn btn-secondary" tabindex="14">Cancelar</a>
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