@extends('app')
@section('title', 'Orden')

@section('content')

<h1>PANEL</h1>

<div class="container my-5 text-center">

           
                 <li class="mx-8">
                    <p class="text-x1 font-bold "><h1>ORDENES PRODUCTOS</h1>  <b></b></p>
                </li>

                
                <li >
                    <a href="{{route ('dashboard')}}" 
                    class=" cerrar btn  btn-sm btn-danger py-2 px-4  ">VOLVER INICIO</a>
                    <a href="{{route ('vista detalles')}}" 
                    class=" cerrar btn  btn-sm btn-success py-2 px-2  ">DETALLES PRODUCTOS</a>
                  
                </li>
                
                
                

                <div class="container col-md-8" >
                <table class="table table-bordered pd-sm-5px">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Nº ORDEN</th>
                        <th scope="col">FECHA</th>
                        <th scope="col">MONTO</th>
                        <th scope="col">ESTADO</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach ($orden as $ordens )

                    <tr>
                    <td>{{ $ordens->numero_orden}}</td>
                    <td>{{ $ordens->fecha}}</td>
                    <td>{{ $ordens->monto}}</td>
                    <td>{{ $ordens->estado}}</td>
                    </tr>

                    @endforeach
                           
                    </tbody>
                    </table>
            </div>

                

@endsection