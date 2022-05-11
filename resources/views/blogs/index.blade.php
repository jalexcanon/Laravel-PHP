@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!-- Modal -->
      <div class="modal fade" id="event" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Crear tarea</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="" id="form_modal">
                  {{ csrf_field() }}
                    <div class="form-group d-none">
                        <label for="id">id</label>
                        <input id="id" class="form-control" type="number" name="id">
                    </div>

                    <div class="form-group">
                      <label for="title" class="form-label">Tarea</label>
                      <input type="text" class="form-control" name="title" id="title" placeholder="Escribe el título de la tarea">
                    </div>

                    <div class="form-group">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" name="descripcion" id="descripcion"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="start">Start</label>
                        <input id="start" class="form-control" type="date" name="start">
                    </div>

                    
                    <div class="form-group">
                        <label for="end">End</label>
                        <input id="end" class="form-control" type="date" name="end">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" id="btnsave">Guardar</button>
              <button type="button" class="btn btn-primary" id="btnedit">Editar</button>
              <button type="button" class="btn btn-primary" id="btndelete">Eliminar</button>
            </div>
          </div>
        </div>
      </div>
@endsection
