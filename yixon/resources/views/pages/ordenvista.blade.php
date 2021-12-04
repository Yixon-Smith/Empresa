@extends('app')
@section('title', 'Orden')

@section('content')

<h1>PANEL</h1>

<div class="container my-5 text-center">

           
                 <li class="mx-8">
                    <p class="text-x1 font-bold "><h1>Orden</h1>  <b></b></p>
                </li>

                
                <li >
                    <a href="" 
                    class=" cerrar btn  btn-sm btn-danger py-2 px-4  ">VOLVER INICIO</a>
                    <a href="" 
                    class=" cerrar btn  btn-sm btn-success py-2 px-2  ">Consultar Usuarios</a>
                    <a href="" 
                    class=" cerrar btn  btn-sm btn-dark py-2 px-2  ">Ordenes Produtos</a>
                </li>
                
                
                

                <div class="container col-md-8" >
                <table class="table table-bordered pd-sm-5px">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">CORREO</th>
                        </tr>
                    </thead>
                    <tbody>
                           
                        </tbody>
                    </table>
            </div>

                

@endsection