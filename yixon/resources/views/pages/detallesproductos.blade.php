@extends('app')
@section('title', 'Detalles Orden')

@section('content')

<h1>PANEL</h1>

<div class="container my-5 text-center">

           
                 <li class="mx-8">
                    <p class="text-x1 font-bold "><h1>DETALLES PRODUCTOS</h1>  <b></b></p>
                </li>

                
                <li >
                    <a href="{{route ('vista orden')}}" 
                    class=" cerrar btn  btn-sm btn-danger py-2 px-4  ">VOLVER A ORDENES</a>
                  
                </li>
                
                <div class="container col-md-8" >
                <table class="table table-bordered pd-sm-5px">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">NOMBRE ARTICULO</th>
                        <th scope="col">CANTIDAD</th>
                        <th scope="col">PRECIO</th>
                        <th scope="col">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                           
                        </tbody>
                    </table>
            </div>

                

@endsection