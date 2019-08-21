

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

                <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <span>{{$personal}}</span>
                                <a href="/notas" class="btn btn-primary btn-sm">Acciones</a>
                            </div>
                            <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <div class="alert alert-success">Alerta</div>
                                    
                                        <!-- Lista.blade.php -->
                                        <tr>
                                            <th scope="row">Id personal</th>
                                            <td>NombrePersonal</td>
                                            <td>DescripcionPersonal</td>
                                            <td><a href="" class="btn btn-warning btn-sm">Editar</a>
                                            
                                                <form action="" class="d-inline" method="POST">
                                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            
                            <div class="card-body">     
                                <div class="alert alert-success"> Alerta</div>
                                <form method="POST" action="/notas">
                                <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2"/>
                                <input type="text"name="descripcion"placeholder="Descripcion"class="form-control mb-2"/>
                                <button class="btn btn-primary btn-block" type="submit"> Acciones</button>
                                </form>
                            </div>
                        </div>
                    </div>

        </div>
    </nav>
