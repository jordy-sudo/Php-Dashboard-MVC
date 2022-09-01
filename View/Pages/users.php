<div class="content-wrapper" style="min-height:717px;">
    <section class="content-header">
        <div class="container-fluid">
            <dov class="row mb-2">
                <div class="col-sm-6">
                    <h1>Administrar usuarios</h1>
                </div>
            </dov>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <button type="button" class="btn btn-success crear-perfil" data-toggle="modal"
                                data-taget="#modal-crear-perfil">
                                Crear un nuevo usuario
                            </button><br>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped dt-responsive tablaperfil" width="100%">
                                <thead>
                                    <tr>
                                        <th style="width:10px">#</th>
                                        <th >Nombre</th>
                                        <th >Usuario</th>
                                        <th >Foto</th>
                                        <th >Rol</th>
                                        <th >Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!--Fin del modal -->   
</div>