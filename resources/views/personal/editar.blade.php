@extends('menu/menu')

@section('contenido')
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <div class="container-fluid">
                <div class="col-md-12"style=" height: 700px; overflow: auto;" >
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <span>
                                <h1 id="prueba">Editar Personal</h1>
                                </span>
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/personal/buscar">Buscar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="/personal/agregar">Agregar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="/personal/editar">Editar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="/personal/eliminar">Eliminar</a>
                                    </li>
                                </ul>
                            </div>
                            <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellidos</th>
                                        <th scope="col">Id Certificación</th>
                                        <th scope="col">Descripción Certificación</th>
                                        <th scope="col">Acciones</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                        
                                
                                      
                                    </tbody>
                                </table>
                            
                            <!-- <div class="card-body">     
                                <form method="POST" action="/notas">
                                <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2"/>
                                <input type="text"name="descripcion"placeholder="Descripcion"class="form-control mb-2"/>
                                <button class="btn btn-primary btn-block" type="submit"> Acciones</button>
                                </form>
                            </div> -->
                        </div>
                    </div>
        </div>
    </nav>
@endsection
