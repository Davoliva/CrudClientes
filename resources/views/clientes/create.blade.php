
  
  <!-- Modal -->
  <div class="modal fade" id="createCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Cliente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('home.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder=""/>
                    <small id="helpId" class="form-text text-muted">Nombre del cliente</small>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder=""/>
                    <small id="helpId" class="form-text text-muted">Telefono del cliente</small>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Correo</label>
                    <input type="text" class="form-control" name="mail" id="" aria-describedby="helpId" placeholder=""/>
                    <small id="helpId" class="form-text text-muted">Correo del cliente</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar los cambios</button>
            </div>
        </form>
        
      </div>
    </div>
  </div>