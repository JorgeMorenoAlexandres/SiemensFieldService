@extends('menu/menu')

@section('contenido')
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <div class="container-fluid">
                <div class="col-md-12"style=" height: 700px; overflow: auto;" >
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <span>
                                <h1 id="prueba">Agregar Personal</h1>
                                </span>
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/personal/buscar">Buscar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="/personal/agregar">Agregar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/personal/editar">Editar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="/personal/eliminar">Eliminar</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xs-7 col-sm-6 col-lg-4" style="background-color:blue">.col-xs-7 .col-sm-6 .col-lg-8</div>
                                    <div class="col-xs-5 col-sm-6 col-lg-4" style="background-color:yellow">.col-xs-5 .col-sm-6 .col-lg-4</div>
                                    <div class="col-xs-5 col-sm-6 col-lg-4" style="background-color:green">.col-xs-5 .col-sm-6 .col-lg-4</div>
                                </div>
                                 <br>
                                <div class="row registrarPersonal">
                                    <div class="col-xs-7 col-sm-6 col-lg-4">
                                        <label for="">Nombre: </label>
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="col-xs-7 col-sm-6 col-lg-4">
                                        <label for="">Apellidos: </label>
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">

                                    </div>
                                    <div class="col-xs-7 col-sm-6 col-lg-4">
                                        <label for="">Id de certificación: </label>
                                        <select class="browser-default custom-select">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row registrarPersonal">
                                    <div class="col-xs-7 col-sm-6 col-lg-4">
                                        <label for="">DAtos adicionales: </label>
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="col-xs-7 col-sm-6 col-lg-4">
                                        <label for="">Datos adicionales: </label>
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="col-xs-7 col-sm-6 col-lg-4">
                                        <label for="">Observaciones: </label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row registrarPersonal">
                                    <div class="col-xs-7 col-sm-6 col-lg-4">
                                        <label for="">DAtos adicionales: </label>
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="col-xs-7 col-sm-6 col-lg-4">
                                        <label for="">Datos adicionales: </label>
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="col-xs-7 col-sm-6 col-lg-4">
                                        <label for="">Observaciones: </label>
                                        <select class="browser-default custom-select">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </nav>
@endsection
