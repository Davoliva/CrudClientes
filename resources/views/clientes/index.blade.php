@extends('home')

@section('content')
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-8">
            <div class="table-responsive">
                <h2>Lista de clientes</h2>
                
                <div class="mb-3 mt-3">
                     <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createCliente">
                        Nuevo cliente
                    </button>
                </div>
               

                <table class="table table-hover">
                    <thead class="table-dark text-white">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr class="">
                                <td scope="row">{{$cliente->id}}</td>
                                <td>{{$cliente->nombre}}</td>
                                <td>{{$cliente->telefono}}</td>
                                <td>{{$cliente->correo}}</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCliente{{$cliente->id}}">
                                        Editar
                                        </button>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteCliente{{$cliente->id}}">
                                        Eliminar
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @include('clientes.info')
                        @endforeach
                        
                    </tbody>
                </table>
            </div>

            @include('clientes.create')
        </div>
    </div>
    
@endsection
