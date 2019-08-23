@extends('menu/menu')


@section('contenido')
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <div class="container-fluid">
                <div class="col-md-12"style=" height: 900px; overflow: auto;" >
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <span>
                                <h1 id="prueba">Personal</h1>
                                </span>
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="/personal/buscar">Buscar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/personal/agregar">Agregar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/personal/editar">Editar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="/personal/eliminar">Eliminar</a>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <div class="container-fluid">
                                <h2>Búsqueda personalizada</h2>
                                <form action="/personal/buscar" method="POST" name="busqueda" id="frmA">
                                    <div class="form-group">
                                    <label for="email">Apellidos:</label>
                                    <input type="text" class="form-control" id="email" placeholder="Enter apellidos" name="apellidos">
                                    </div>
                                    <div class="form-group">
                                    <label for="pwd">Certificación:</label>
                                    <input type="text" class="form-control" id="pwd" placeholder="Enter certificación" name="certificacion">
                                    </div>
                                    <button type="button" class="btn btn-primary" id="btn-buscar">Consultar</button>
                                    <a href="/personal/buscar"><button type="button" class="btn btn-danger" id="btn-buscar">Regresar</button></a> 
                                </form>
                                <br>
                                <div class="inicial">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Apellidos</th>
                                                <th scope="col">Id Certificación</th>
                                                <th scope="col">Descripción Certificación</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                                                
                                                <!-- Lista.blade.php -->
                                                @foreach ($PersonalQuery as $item)
                                                <tr id="trRemove1">
                                                    <th scope="row">{{$item->id_personal}}</th>
                                                    <td>{{$item->nombre}}</td>
                                                    <td>{{$item->apellidos}}</td>
                                                    <td>{{$item->id_certificacion}}</td>
                                                    <td>{{$item->desc_certificaciones}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                  {{$PersonalQuery->links()}}
                                </div>
                                <div class="BusquedaPersonalizada personalizada">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col"><strong>Id</strong></th>
                                                    <th scope="col"><strong>Nombre</strong></th>
                                                    <th scope="col"><strong>Apellidos</strong></th>
                                                    <th scope="col"><strong>Id Certificación</strong></th>
                                                    <th scope="col"><strong>Descripción Certificación</strong></th>
                                                </tr>
                                            </thead>
                                            <tbody>           
                                                <!-- Lista.blade.php -->
                                            </tbody>
                                        </table>
                                 
                                </div>
                            </div>
                            
                                
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